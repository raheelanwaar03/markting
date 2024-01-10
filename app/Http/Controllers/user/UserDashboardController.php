<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User;
use App\Models\user\BuyPlan;
use App\Models\user\Deposit;
use App\Models\user\History;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{

    public function welcome()
    {
        $plans = Plans::where('status', 'unlock')->get();
        return view('welcome', compact('plans'));
    }

    public function index()
    {
        $plans = Plans::where('status', 'unlock')->get();
        return view('user.dashboard', compact('plans'));
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function transfer()
    {
        return view('user.deposit.add');
    }

    public function storeTransfer(Request $request)
    {
        $validated = $request->validate([
            'bank' => 'required',
            'account_name' => 'required',
            'account_number' => 'required',
            'money' => 'required',
            'screen_shot' => 'required',
        ]);

        $image = $validated['screen_shot'];
        $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);


        $deposit = new Deposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->bank = $validated['bank'];
        $deposit->account_number = $validated['account_number'];
        $deposit->account_name = $validated['account_name'];
        $deposit->money = $validated['money'];
        $deposit->screen_shot = $imageName;
        $deposit->save();
        // history
        $history = new History();
        $history->user_id = auth()->user()->id;
        $history->amount = $validated['money'];
        $history->type = 'deposit';
        $history->save();
        return redirect()->route('User.Dashboard')->with('success', 'Your deposit request has been submitted please wait for admin approvel!');
    }

    public function history()
    {
        $history = History::get();
        return view('user.history',compact('history'));
    }

    public function team()
    {
        return view('user.team');
    }

    public function daily_reward()
    {
        $buy_plans = BuyPlan::where('user_id', auth()->user()->id)->get();

        foreach ($buy_plans as $plan) {
            // checking user plan created_at date
            if ($plan->status === 'active') {
                // Check if the user's plan has been active for more than three days
                $activationDate = Carbon::parse($plan->created_at);
                $currentDate = Carbon::now();
                if ($currentDate->diffInDays($activationDate) >= $plan->duration) {
                    $plan = BuyPlan::where('plan_id', $plan->id)->first();
                    $plan->status = 'inactive';
                    $plan->save();

                    $history = new History();
                    $history->user_id = auth()->user()->id;
                    $history->status = 'inactive';
                    $history->type = 'Buy Plan';
                    $history->amount = $plan->amount;
                    $history->save();

                }
            }
        }

        $active_plans = BuyPlan::where('user_id', auth()->user()->id)->where('status', 'active')->get();
        $total_daily_profit = 0;
        foreach($active_plans as $active)
        {
            $total_daily_profit += $active->daily_profit;
        }
        // adding to user wallet
        $user = User::where('id', auth()->user()->id)->first();
        $user->balance += $total_daily_profit;
        $user->save();

        $history = new History();
        $history->user_id = auth()->user()->id;
        $history->amount = $total_daily_profit;
        $history->type = 'reward';
        $history->save();

        return redirect()->back()->with('success', 'You have got your daily profit');
    }

    public function withdraw_history()
    {
        $history = History::where('user_id',auth()->user()->id)->where('type','withdraw')->get();
        return view('user.widthraw_history',compact('history'));
    }

    public function deposit_history()
    {
        $history = History::where('user_id',auth()->user()->id)->where('type','deposit')->get();
        return view('user.widthraw_history',compact('history'));
    }

    public function plan_status()
    {
        $history = History::where('user_id',auth()->user()->id)->where('type','buy_plan')->get();
        return view('user.plan_status',compact('history'));
    }


}
