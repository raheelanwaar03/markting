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
            'min_invest' => 'required',
            'max_invest' => 'required',
            'persentage' => 'required',
            'duration' => 'required',
            'limite' => 'required',
            'badge' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);

        $plan = new Plans();
        $plan->plan_name = $validated['plan_name'];
        $plan->duration = $validated['duration'];
        $plan->persentage = $validated['persentage'];
        $plan->min_invest = $validated['min_invest'];
        $plan->max_invest = $validated['max_invest'];
        $plan->limite = $validated['limite'];
        $plan->badge = $validated['badge'];
        $plan->image = $imageName;
        $plan->save();
        return redirect()->route('Admin.All.Plan')->with('success', 'plan added successfully');
    }

    public function index()
    {
        $plans = Plans::get();
        return view('admin.plan.allPlans',compact('plans'));
    }

    public function lockPlan($id)
    {
        $plan = Plans::find($id);
        $plan->status = 'lock';
        $plan->save();
        return redirect()->back()->with('success','Plan has been Locked');
    }

    public function unLockPlan($id)
    {
        $plan = Plans::find($id);
        $plan->status = 'unlock';
        $plan->save();
        return redirect()->back()->with('success','Plan has been Unlocked');
    }

}
