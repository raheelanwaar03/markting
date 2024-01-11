<?php

use App\Models\admin\Referralsetting;
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
    $my = History::where('user_id', auth()->user()->id)->where('type', 'Buy Plan')->get();
    $my_investment = 0;
    foreach ($my as $investor) {
        $my_investment += $investor->amount;
    }
    return $my_investment;

    $referrals = User::where('referral', auth()->user()->user_code)->get();

    if ($referrals != null) {

        foreach ($referrals as $person) {
            $first_person_investment = History::where('user_id', $person->id)->where('type', 'Buy Plan')->get();
            $first_user_investment = 0;
            foreach ($first_person_investment as $investor) {
                $first_user_investment += $investor->amount;
            }
            $first_return_value = $my_investment + $first_user_investment;
        }
        return $first_return_value;
    } else {
        return $my_investment;
    }
}

function earned_income()
{
    $referral_friends = User::where('referral', auth()->user()->user_code)->where('status', 'approved')->get();
    if ($referral_friends != null) {
        $count = $referral_friends->count();
    }

    $bouns = Referralsetting::where('status', '1')->first();
    $first = $bouns->first_person;

    $total_money = $count * $first;
    return $total_money;
}

function pending_income()
{
    $referral_friends = User::where('referral', auth()->user()->user_code)->where('status', 'pending')->get();
    if ($referral_friends != null) {
        $count = $referral_friends->count();
    }

    $bouns = Referralsetting::where('status', '1')->first();
    $first = $bouns->first_person;

    $total_money = $count * $first;
    return $total_money;
}

function upliner_income()
{
    $my = History::where('user_id', auth()->user()->id)->where('type', 'Buy Plan')->get();
    $my_investment = 0;
    foreach ($my as $investor) {
        $my_investment += $investor->amount;
    }
    return $my_investment;

    $upliners = User::where('user_code', $my->referral)->get();

    if ($upliners != null) {

        foreach ($upliners as $person) {
            $first_person_investment = History::where('user_id', $person->id)->where('type', 'Buy Plan')->get();
            $first_user_investment = 0;
            foreach ($first_person_investment as $investor) {
                $first_user_investment += $investor->amount;
            }
            $first_return_value = $my_investment + $first_user_investment;
        }
        return $first_return_value;
    } else {
        return $my_investment;
    }
}
