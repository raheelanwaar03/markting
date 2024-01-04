<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $plans = Plans::get();
        return view('user.dashboard',compact('plans'));
    }

    public function profile()
    {
        return view('user.profile');
    }

}
