<?php

use App\Models\admin\Referralsetting;
use App\Models\User;
use App\Models\user\BuyPlan;
use App\Models\user\Deposit;
use App\Models\user\History;
use App\Models\user\WidthrawBalance;
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
    $investment = Deposit::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
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

function total_team()
{
    $user = User::where('referral', auth()->user()->user_code)->get()->count();
    return $user;
}

function Total_Team_Investment()
{
    $my = Deposit::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    $my_investment = 0;
    foreach ($my as $investor) {
        $my_investment += $investor->amount;
    }

    $referrals = User::where('referral', auth()->user()->user_code)->get();

    if ($referrals != null) {

        foreach ($referrals as $person) {
            $first_person_investment = Deposit::where('user_id', $person->id)->where('status', 'approved')->get();
            $first_user_investment = 0;
            foreach ($first_person_investment as $investor) {
                $first_user_investment += $investor->money;
            }
            $first_return_value = $my_investment + $first_user_investment;
            return $first_return_value;
        }
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

function my_investment()
{
    $my_investment = Deposit::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    $my_total_invest = 0;
    foreach ($my_investment as $person) {
        $my_total_invest += $person->money;
    }
    return $my_total_invest;
}

function withdraw_amount()
{
    $withdraw = WidthrawBalance::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    $total_withdraw = 0;
    foreach ($withdraw as $person) {
        $total_withdraw += $person->money;
    }
    return $total_withdraw;
}

function upliner_deposit()
{
    $upliner = User::where('user_code', auth()->user()->referral)->first();
    if ($upliner == null) {
        return 0;
    } else {
        $first_investor = Deposit::where('user_id', $upliner->id)->where('status', 'approved')->get();
        $first_investment = 0;
        foreach ($first_investor as $investor) {
            $first_investment += $investor->money;
        }
    }
    $second_upliner = User::where('user_code', $upliner->referral)->first();
    if ($second_upliner == null) {
        return $first_investment;
    } else {
        $second_investor = Deposit::where('user_id', $second_upliner->id)->where('status', 'approved')->get();
        $second_investment = 0;
        foreach ($second_investor as $investor) {
            $second_investment += $investor->money;
        }
    }
    $calculation = 0;

    $third_upliner = User::where('user_code', $second_upliner->referral)->first();
    if ($third_upliner == null) {
        $calculation = $second_investment + $first_investment;
        return $calculation;
    } else {
        $third_investor = Deposit::where('user_id', $third_upliner->id)->where('status', 'approved')->get();
        $third_investment = 0;
        foreach ($third_investor as $investor) {
            $third_investment += $investor->money;
        }
    }

    $main = $third_investment + $calculation;
    return $main;
}

function team_deposit()
{
    $team = User::where('referral', auth()->user()->user_code)->get();

    if ($team != null) {

        foreach ($team as $person) {
            $first_person_investment = Deposit::where('user_id', $person->id)->where('status', 'approved')->get();
            $team_user_investment = 0;
            foreach ($first_person_investment as $investor) {
                $team_user_investment += $investor->amount;
            }
        }
        return $team_user_investment;
    } else {
        return 0;
    }
}

if (!function_exists('getNextDate')) {
    function getNextDate($created_at, $duration)
    {
        $startDate = Carbon::parse($created_at);
        $startDate->addDays($duration)->toDateString();
        return $startDate->format('m/d/Y');
    }
}

if (!function_exists('calculateProgression')) {
    function calculateProgression($daily_profit, $total_profit, $duration)
    {
        $day = $duration;
        $progression = [];
        $calu = $total_profit / $daily_profit;
        return $calu;
        $progression = $daily_profit / $total_profit * 100;

        return $progression;
    }
}
