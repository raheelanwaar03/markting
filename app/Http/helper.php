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
    $user = User::where('status', 'approved')->get()->count();
    return $user;
}

function pending_users()
{
    $user = User::where('status', 'pending')->get()->count();
    return $user;
}

function rejected_users()
{
    $user = User::where('status', 'rejected')->get()->count();
    return $user;
}

function user_investment()
{
    $investment = Deposit::where('id', auth()->user()->id)->where('status', 'approved')->get();
    $total_money = 0.00;

    foreach ($investment as $invest) {
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
    $outcome = History::where('user_id', auth()->user()->id)->where('type', 'deposit')->where('status', 'approved')->get();
    $total_outcome = 0;
    foreach ($outcome as $out) {
        $total_outcome += $out->amount;
    }
    return $total_outcome;
}

function Total_Team_Investment()
{
    $my = History::where('user_id', auth()->user()->id)->get();
    $my_investment = 0;
    foreach ($my as $investor) {
        $my_investment += $investor->amount;
    }

    $user = User::where('referral', auth()->user()->user_code)->first();
    if ($user != null) {
        $first_person = History::where('user_id', $user->id)->get();
        $first_user_investment = 0;
        foreach ($first_person as $investor) {
            $first_user_investment += $investor->amount;
        }
    }
    else{
        return $my_investment;
    }

    // second user

    $second_person = User::where('referral', $first_person->user_code)->first();
    if ($second_person != null) {
        $second_user = History::where('user_id', $second_person->id)->get();
        $second_user_investment = 0;
        foreach ($second_user as $investor) {
            $second_user_investment += $investor->amount;
        }
    }
    else
    {
        return $my_investment;
    }

    // Third user

    $third_person = User::where('referral', $second_user->user_code)->first();
    if ($third_person != null) {
        $third_user = History::where('user_id', $third_person->id)->get();
        $third_user_investment = 0;
        foreach ($second_user as $investor) {
            $third_user_investment += $investor->amount;
        }
    }
    else{
        $amount = $my_investment + $second_user_investment;
        return $amount;
    }

    // fourth user

    $fourth_person = User::where('referral', $user->user_code)->first();
    if ($fourth_person != null) {
        $fourth_user = History::where('user_id', $fourth_person->id)->get();
        $fourth_user_investment = 0;
        foreach ($fourth_user as $investor) {
            $fourth_user_investment += $investor->amount;
        }
    }
    else{
        $amount = $my_investment + $second_user_investment + $third_user_investment;
        return $amount;
    }

    // fifth person

    $fifth_person = User::where('referral', $fourth_person->user_code)->first();
    if ($fifth_person != null) {
        $fifth_user = History::where('user_id', $fifth_person->id)->get();
        $fifth_user_investment = 0;
        foreach ($fifth_user as $investor) {
            $fifth_user_investment += $investor->amount;
        }
    }
    else{
        $amount = $my_investment + $second_user_investment + $third_user_investment + $fourth_user_investment;
        return $amount;
    }

    $sixth_person = User::where('referral', $fifth_person->user_code)->first();
    if ($sixth_person != null) {
        $sixth_user = History::where('user_id', $sixth_person->id)->get();
        $sixth_user_investment = 0;
        foreach ($sixth_user as $investor) {
            $sixth_user_investment += $investor->amount;
        }
    }
    else{
        $amount = $my_investment + $second_user_investment + $third_user_investment + $fourth_user_investment;
        return $amount;
    }

    $total_investment = $my_investment + $first_user_investment + $second_user_investment + $third_user_investment + $fourth_user_investment + $fifth_user_investment;
        + $fifth_user_investment + $sixth_user_investment;
    return $total_investment;
}

function earned_income()
{
    $referral_friends = User::where('referral', auth()->user()->user_code)->where('status', 'approved')->get();
    // if ($referral_friends != null)
    // {
    //     $total = 0;
    //     foreach($referral_friends as $friend)
    //     {
    //         $total += $friend->
    //     }
    // }
    return 500;
}
