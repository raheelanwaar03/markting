<?php

use App\Models\User;
use App\Models\user\Deposit;
use App\Models\user\History;
use Carbon\Carbon;

function users()
{
    $user = User::get()->count();
    return $user;
}

function approved_users()
{
    $user = User::where('status','approved')->get()->count();
    return $user;
}

function pending_users()
{
    $user = User::where('status','pending')->get()->count();
    return $user;
}

function rejected_users()
{
    $user = User::where('status','rejected')->get()->count();
    return $user;
}

function user_investment()
{
    $investment = Deposit::where('status','approved')->get();
    $total_money = 0.00;

    foreach($investment as $invest)
    {
        $total_money += $invest->money;
    }
    return $total_money;
}

function month()
{
    // getting current month
    $now = Carbon::now();
    $month = $now->format('F');
    return $month;
}

function user_outcome()
{
    $outcome = History::where('user_id',auth()->user()->id)->where('type','deposit')->where('status','approved')->get();
    $total_outcome = 0;
    foreach($outcome as $out)
    {
        $total_outcome += $out->amount;
    }
    return $total_outcome;
}

