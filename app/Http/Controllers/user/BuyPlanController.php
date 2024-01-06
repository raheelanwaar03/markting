<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Plans;
use App\Models\User;
use App\Models\user\BuyPlan;
use Illuminate\Http\Request;

class BuyPlanController extends Controller
{

    public function plan_details($id)
    {
        $plan = Plans::where('id',$id)->first();
        return $plan;
    }


    public function buyPlan($id)
    {
        $plan = Plans::find($id);

        // applying condition
        $user = User::where('id',auth()->user()->id)->first();
        return $user;

        // storing plan details
        $buy_plan = new BuyPlan();
        $buy_plan->user_id = auth()->user()->id;
        $buy_plan->plan_id = $id;
        $buy_plan->save();
    }
}
