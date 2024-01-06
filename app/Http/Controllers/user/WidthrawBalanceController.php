<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Wallet;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawBalanceController extends Controller
{
    public function widthraw_Balance()
    {
        $wallet = Wallet::first();
        return view('user.widthraw', compact('wallet'));
    }

    public function add_wallet()
    {
        return view('user.add_wallet');
    }

    public function store_wallet(Request $request)
    {
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();
        if ($wallet != null) {
            return redirect()->back()->with('error', 'you have already added your wallet');
        } else {
            $wallet = new Wallet();
            $wallet->user_id = auth()->user()->id;
            $wallet->wallet_name = $request->wallet_name;
            $wallet->wallet_number = $request->wallet_number;
            $wallet->holder_name = $request->holder_name;
            $wallet->save();
            return redirect()->route('User.Widthraw.View')->with('success', 'your wallet has been added successfully');
        }
    }

    public function store_widthraw(Request $request)
    {
        // checking if user have enougn balance
        $user = User::where('id',auth()->user()->id)->first();
        $user_balance = $user->balance;
        if($user_balance = $request->money)
        {
            return 'ok';
        }
        else
        {
            return 'error';
        }

        $wallet = Wallet::where('user_id',auth()->user()->id)->first();
        // Widthraw
        $widthraw = new WidthrawBalance();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->wallet_name = $wallet->wallet_name;
        $widthraw->wallet_number = $wallet->wallet_number;
        $widthraw->holder_name = $wallet->holder_name;
        $widthraw->money = $request->money;
        $widthraw->save();
        return 'success';
    }

}
