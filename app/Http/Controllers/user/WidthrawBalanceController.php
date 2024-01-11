<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\History;
use App\Models\user\Wallet;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawBalanceController extends Controller
{
    public function widthraw_Balance()
    {
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();
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

        $check_withdraw = History::where('user_id', auth()->user()->id)->where('type', 'withdraw')->first();

        if ($check_withdraw != null) {
            return redirect()->route('User.Dashboard')->with('error', 'You alread requested for withdraw');
        }

        $withdraw_money = $request->amount;
        // checking if user have enougn balance
        $user = User::where('id', auth()->user()->id)->first();
        $user_balance = $user->balance;
        if (auth()->user()->balance == null) {
            return redirect()->route('User.Dashboard')->with('error', 'you have not enough balance');
        }
        if ($request->money > $user_balance) {
            return 'error';
        }
        $user->balance -= $request->money;
        $user->save();
        $wallet = Wallet::where('user_id', auth()->user()->id)->first();
        if ($wallet == null) {
            return redirect()->route('User.Add.Wallet')->with('error', 'please add your wallet first');
        }
        // Widthraw
        $widthraw = new WidthrawBalance();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->wallet_name = $wallet->wallet_name;
        $widthraw->wallet_number = $wallet->wallet_number;
        $widthraw->holder_name = $wallet->holder_name;
        $widthraw->money = $withdraw_money;
        $widthraw->save();

        $history = new History();
        $history->user_id = auth()->user()->id;
        $history->amount = $withdraw_money;
        $history->type = 'withdraw';
        $history->save();
        return redirect()->route('User.Dashboard')->with('success', 'you have been requested for withdraw successfully');
    }
}
