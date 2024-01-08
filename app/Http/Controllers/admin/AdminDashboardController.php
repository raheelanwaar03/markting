<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Referralsetting;
use App\Models\User;
use App\Models\user\Deposit;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashborad');
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
        return view('admin.deposit.add',compact('user','deposit'));
    }

    public function updateDeposit(Request $request,$id)
    {
        $user = User::find($id);
        $user->balance += $request->balance;
        $user->save();
        return redirect()->route('Admin.Deposit.Requests')->with('success','Deposit added successfully');
    }


}
