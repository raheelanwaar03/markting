<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function add()
    {
        return view('admin.plan.add');
    }

    public function store(Request $request)
    {
        return $request;
    }

}
