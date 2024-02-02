<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BankDetails;
use App\Models\admin\Referralsetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function referSetting()
    {
        $referral_bouns = Referralsetting::where('status', '1')->first();
        return view('admin.setting.referral_commission', compact('referral_bouns'));
    }

    public function editReferSetting($id)
    {
        $referral_bouns = Referralsetting::find($id);
        return view('admin.setting.edit_referral_commission', compact('referral_bouns'));
    }

    public function updateReferSetting(Request $request, $id)
    {
        $bouns = Referralsetting::find($id);
        $bouns->first_person = $request->first_person;
        $bouns->second_person = $request->second_person;
        $bouns->third_person = $request->third_person;
        $bouns->save();
        return redirect()->route('Admin.Referral.Setting')->with('success', 'bouns has been changed');
    }

    public function editBankDetails()
    {
        $bank = BankDetails::where('status', 1)->first();
        return view('admin.setting.bank', compact('bank'));
    }

    public function updateBankDetails(Request $request, $id)
    {
        $bank = BankDetails::find($id);
        $bank->title = $request->title;
        $bank->account = $request->account;
        $bank->bank = $request->bank;
        $bank->save();
        return redirect()->back()->with('success', 'Details Changed Successfully');
    }
}
