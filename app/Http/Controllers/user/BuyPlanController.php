<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User;
use App\Models\user\BuyPlan;
use Illuminate\Http\Request;

class BuyPlanController extends Controller
{

    public function plan_details($id)
    {
        $plan = Plans::where('id', $id)->first();
    }

    public function invest($id)
    {
        $plan = Plans::where('id', $id)->first();
        return view('user.buyPlan.invest', compact('plan'));
    }

    public function buyPlan(Request $request, $id)
    {
        $plan = Plans::find($id);
        $percentage = $plan->persentage;
        $duration = $plan->duration;

        // checking plan limite
        $plan_limit = BuyPlan::where('status','active')->where('plan_id',$id)->where('user_id',auth()->user()->id)->get();
        $count = $plan_limit->count();
        // return $plan->limite;
        if($count > $plan->limite )
        {
            return redirect()->back()->with('error','You purchasing limit for this plan has been completed');
        }

        if ($request->amount < $plan->min_invest) {
            return redirect()->back()->with('error', 'Your amount should not be less than plan limit');
        }
        if ($request->amount > $plan->max_invest) {
            return redirect()->back()->with('error', 'Your amount should not be greater than plan limit');
        }
        $user = User::where('id', auth()->user()->id)->first();
        if ($user->balance < $request->amount) {
            return redirect()->back()->with('error', 'you have not enough balance.Deposit more to invest');
        }

        $amount = $request->amount;
        $total = $amount+($amount * $percentage * $duration);
        $profit = $total - $amount;
        return view('user.buyPlan.plan_details', compact('plan', 'total', 'amount', 'profit'));
    }

    public function store_plan(Request $request, $id)
    {
        // getting user enter amount
        $amount = $request->amount;
        // applying condition
        $user = User::where('id', auth()->user()->id)->first();
        $user->balance -= $amount;
        $user->save();
        // daily profit will be
        $daily_profit = $request->profit / $request->duration;
        // storing plan details
        $buy_plan = new BuyPlan();
        $buy_plan->user_id = auth()->user()->id;
        $buy_plan->plan_id = $id;
        $buy_plan->amount = $request->amount;
        $buy_plan->daily_profit = $daily_profit;
        $buy_plan->total_profit = $request->profit;
        $buy_plan->duration = $request->duration;
        $buy_plan->save();
        return redirect()->route('User.Dashboard')->with('success', 'You buy this plan successfully');
    }
}
