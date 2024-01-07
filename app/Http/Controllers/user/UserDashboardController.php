<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User;
use App\Models\user\Deposit;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{

    public function welcome()
    {
        $plans = Plans::get();
        return view('welcome',compact('plans'));
    }

    public function index()
    {
        $plans = Plans::get();
        return view('user.dashboard',compact('plans'));
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
        ]);

        $deposit = new Deposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->bank = $validated['bank'];
        $deposit->account_number = $validated['account_number'];
        $deposit->account_name = $validated['account_name'];
        $deposit->money = $validated['money'];
        $deposit->save();
        return redirect()->route('User.Dashboard')->with('success','Your deposit request has been submitted please wait for admin approvel!');
    }

    public function history()
    {
        return view('user.history');
    }


}
