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
        return view('welcome', compact('plans'));
    }

    public function index()
    {
        $plans = Plans::get();
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
        return redirect()->route('User.Dashboard')->with('success', 'Your deposit request has been submitted please wait for admin approvel!');
    }

    public function history()
    {
        return view('user.history');
    }

    public function team()
    {
        return view('user.team');
    }
}
