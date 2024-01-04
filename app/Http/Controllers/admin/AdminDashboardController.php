<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        return view('admin.user.allUsers',compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status','rejected')->get();
        return view('admin.user.pendingUsers',compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status','rejected')->get();
        return view('admin.user.rejectedUsers',compact('users'));
    }

    public function rejectUser($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success','user has been rejected');
    }

    public function pendingUser($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success','user has been pending');
    }

    public function approvedUser($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success','user has been approved');
    }


}
