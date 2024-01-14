<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Referralsetting;
use App\Models\admin\Notification;
use App\Models\User;
use App\Models\user\Deposit;
use App\Models\user\History;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashborad');
    }

    public function editUser($id)
    {
        $user =  User::find($id);
        return view('admin.user.editUser', compact('user'));
    }

    public function notification()
    {
        return view('admin.notification');
    }

    public function store_notification(Request $request)
    {
        $notification = new Notification();
        $notification->title = $request->title;
        $notification->description = $request->description;
        $notification->save();
        return redirect()->back()->with('success', 'Notification Added');
    }


    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->balance = $request->balance;
        $user->save();
        return redirect()->back()->with('success', 'Balance changed successfully');
    }

    public function allUsers()
    {
        $users = User::get();
        return view('admin.user.allUsers', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status', 'rejected')->get();
        return view('admin.user.rejectedUsers', compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.user.pendingUsers', compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status', 'approved')->get();
        return view('admin.user.approvedUsers', compact('users'));
    }

    public function rejectUser($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success', 'user has been rejected');
    }

    public function pendingUser($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success', 'user has been pending');
    }

    public function approvedUser($id)
    {
        $bouns = Referralsetting::where('status', '1')->first();
        $first = $bouns->first_person;
        $second = $bouns->second_person;
        $third = $bouns->third_person;

        $user = User::find($id);

        // checking user refferal
        $first_referral = User::where('user_code', $user->referral)->first();

        // if user is null

        if ($first_referral == '') {
            $user->status = 'approved';
            $user->save();
            return redirect()->back()->with('success', 'user has been approved');
        } else {
            $user->status = 'approved';
            $user->save();
            $first_referral->balance += $first;
            $first_referral->save();
        }

        // count uesr all referals
        if ($first_referral != null) {
            $referral_users = User::where('referral', $first_referral->user_code)->get();
            $count_users =  $referral_users->count();
            if ($count_users <= 10) {
                $first_referral->level = 'Level 1';
                $first_referral->save();
            }
            if ($count_users <= 20) {
                $first_referral->level = 'Level 2';
                $first_referral->save();
            }
            if ($count_users <= 30) {
                $first_referral->level = 'Level 3';
                $first_referral->save();
            }
            if ($count_users <= 40) {
                $first_referral->level = 'Level 4';
                $first_referral->save();
            }
            if ($count_users <= 50) {
                $first_referral->level = 'Level 5';
                $first_referral->save();
            }
            if ($count_users <= 60) {
                $first_referral->level = 'Level 6';
                $first_referral->save();
            }
            if ($count_users <= 70) {
                $first_referral->level = 'Level 7';
                $first_referral->save();
            }
            if ($count_users <= 80) {
                $first_referral->level = 'Level 8';
                $first_referral->save();
            }
            if ($count_users <= 90) {
                $first_referral->level = 'Level 9';
                $first_referral->save();
            }
            if ($count_users <= 100) {
                $first_referral->level = 'Level 10';
                $first_referral->save();
            }
        }


        // checking second referral

        $second_referral = User::where('user_code', $first_referral->referral)->first();
        if ($second_referral == '') {
            $user->status = 'approved';
            $user->save();
            return redirect()->back()->with('success', 'user has been approved');
        } else {
            $user->status = 'approved';
            $user->save();
            $second_referral->balance += $second;
            $second_referral->save();
        }

        // checking third person

        $third_referral = User::where('user_code', $second_referral->referral)->first();
        if ($third_referral == '') {
            $user->status = 'approved';
            $user->save();
            return redirect()->back()->with('success', 'user has been approved');
        } else {
            $user->status = 'approved';
            $user->save();
            $third_referral->balance += $third;
            $third_referral->save();
            return redirect()->back()->with('success', 'user has been approved');
        }
    }

    public function deposits()
    {
        $deposits = Deposit::where('status', 'pending')->get();
        return view('admin.deposit.pending', compact('deposits'));
    }

    public function approvedDeposit()
    {
        $deposits = Deposit::where('status', 'approved')->get();
        return view('admin.deposit.approved', compact('deposits'));
    }

    public function rejectedDeposit()
    {
        $deposits = Deposit::where('status', 'rejected')->get();
        return view('admin.deposit.rejected', compact('deposits'));
    }

    public function approveDeposit($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status = 'approved';
        $deposit->save();
        return redirect()->back()->with('success', 'Deposit request has been approved');
    }

    public function rejectDeposit($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status = 'rejected';
        $deposit->save();
        return redirect()->back()->with('success', 'Deposit request has been approved');
    }

    public function pendingDeposit($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status = 'pending';
        $deposit->save();
        return redirect()->back()->with('success', 'Deposit request has been approved');
    }

    public function addDeposit($id)
    {
        $deposit = Deposit::find($id);
        $user = User::where('id', $deposit->user_id)->first();
        return view('admin.deposit.add', compact('user', 'deposit'));
    }

    public function updateDeposit(Request $request, $id)
    {
        $user = User::find($id);
        $user->balance += $request->balance;
        $user->save();
        return redirect()->route('Admin.Deposit.Requests')->with('success', 'Deposit added successfully');
    }

    // giving user reward

    public function give_reward($id)
    {
        $deposit = Deposit::find($id);
        $user = User::where('id', $deposit->user_id)->first();
        return view('admin.user.giveReward', compact('user', 'deposit'));
    }

    public function store_reward(Request $request, $id)
    {
        $user = User::find($id);
        $user->balance += $request->balance;
        $user->save();
        // history

        $history = new History();
        $history->user_id = $user->id;
        $history->amount = $request->balance;
        $history->type = 'reward';
        $history->save();
        return redirect()->back()->with('success', 'Reward given successfully');
    }
}
