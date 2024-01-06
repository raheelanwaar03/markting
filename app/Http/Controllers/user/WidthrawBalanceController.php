<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Wallet;
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
}
