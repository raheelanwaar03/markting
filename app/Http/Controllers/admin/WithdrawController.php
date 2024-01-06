<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function pending()
    {
        $withdraws = WidthrawBalance::where('status','pending')->get();
        return view('admin.withdraw.pending',compact('withdraws'));
    }

    public function approved()
    {
        $withdraws = WidthrawBalance::where('status','approved')->get();
        return view('admin.withdraw.approved',compact('withdraws'));
    }

    public function rejected()
    {
        $withdraws = WidthrawBalance::where('status','rejected')->get();
        return view('admin.withdraw.rejected',compact('withdraws'));
    }

    public function make_pending($id)
    {
        $withdraw = WidthrawBalance::find($id);
        $withdraw->status = 'pending';
        $withdraw->save();
        return redirect()->back()->with('success','Withdraw has been pending successfully');
    }

    public function make_rejected($id)
    {
        $withdraw = WidthrawBalance::find($id);
        $withdraw->status = 'rejected';
        $withdraw->save();
        return redirect()->back()->with('success','Withdraw has been rejected successfully');
    }

    public function make_approved($id)
    {
        $withdraw = WidthrawBalance::find($id);
        $withdraw->status = 'approved';
        $withdraw->save();
        return redirect()->back()->with('success','Withdraw has been approved successfully');
    }

}
