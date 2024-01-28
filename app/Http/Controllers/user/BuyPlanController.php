<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User;
use App\Models\user\BuyPlan;
use App\Models\user\History;
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
        $plan_name = $plan->plan_name;

        // checking plan limite
        $plan_limit = BuyPlan::where('status', 'active')->where('plan_id', $id)->where('user_id', auth()->user()->id)->get();
        $count = $plan_limit->count();
        // return $plan->limite;
        if ($count > $plan->limite) {
            return redirect()->back()->with('error', 'Limite Full!');
        }

        if ($request->amount < $plan->min_invest) {
            return redirect()->back()->with('error', 'Less Amount');
        }
        if ($request->amount > $plan->max_invest) {
            return redirect()->back()->with('error', 'Greater Amount');
        }
        $user = User::where('id', auth()->user()->id)->first();
        if ($user->balance < $request->amount) {
            return redirect()->back()->with('error', 'Less Balance');
        }

        $amount = $request->amount;
        $calculation = ($amount * $percentage * $duration) / 100;
        $total = $amount + $calculation;
        $profit = $total - $amount;
        return view('user.buyPlan.plan_details', compact('plan', 'plan_name', 'total', 'amount', 'profit'));
    }

    public function store_plan(Request $request, $id)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user_security_key = $user->key;
        if ($user_security_key != $request->security_key) {
            return redirect()->route('User.Dashboard')->with('error', 'Security key Not Match');
        }
        // checking user balance
        if (auth()->user()->balance < $request->amount) {
            return redirect()->route('User.Dashboard')->with('error', 'Less balance');
        }

        // getting user enter amount
        $amount = $request->amount;
        $user->balance -= $amount;
        $user->save();
        // daily profit will be
        $calculation = $request->profit / $request->duration;
        $daily_profit = $calculation;
        // storing plan details
        $buy_plan = new BuyPlan();
        $buy_plan->user_id = auth()->user()->id;
        $buy_plan->plan_id = $id;
        $buy_plan->plan_name = $request->plan_name;
        $buy_plan->amount = $request->amount;
        $buy_plan->daily_profit = $daily_profit;
        $buy_plan->total_profit = $request->profit;
        $buy_plan->duration = $request->duration;
        $buy_plan->save();

        // adding into history
        $history = new History();
        $history->user_id = auth()->user()->id;
        $history->name = $request->plan_name;
        $history->status = 'active';
        $history->amount = $request->profit;
        $history->type = 'Buy Plan';
        $history->day = $request->duration;
        $history->save();

        return redirect()->route('User.Dashboard')->with('success', 'Success');
    }
}
