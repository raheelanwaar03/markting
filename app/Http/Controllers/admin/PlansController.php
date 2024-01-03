<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function add()
    {
        return view('admin.plan.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'plan_name' => 'required',
            'investment' => 'required',
            'daily_profit' => 'required',
            'total_profit' => 'required',
            'duration' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);

        $plan = new Plans();
        $plan->plan_name = $validated['plan_name'];
        $plan->daily_profit = $validated['daily_profit'];
        $plan->investment = $validated['investment'];
        $plan->total_profit = $validated['total_profit'];
        $plan->duration = $validated['duration'];
        $plan->image = $imageName;
        $plan->save();
        return redirect()->route('Admin.All.Plan')->with('success', 'plan added successfully');
    }

    public function index()
    {
        $plans = Plans::get();
        return view('admin.plan.allPlans',compact('plans'));
    }
}
