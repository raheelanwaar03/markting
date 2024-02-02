<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\PlansController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\WithdrawController;
use Illuminate\Support\Facades\Route;

Route::prefix('Admin/')->name('Admin.')->middleware('auth', 'admin')->group(function () {

    Route::get('Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    // user routes
    Route::get('All/Users', [AdminDashboardController::class, 'allUsers'])->name('All.Users');
    Route::get('Edit/User/{id}', [AdminDashboardController::class, 'editUser'])->name('Edit.User');
    Route::post('Update/User/{id}', [AdminDashboardController::class, 'updateUser'])->name('Update.User');
    Route::post('Update/Password/{id}', [AdminDashboardController::class, 'updatePassword'])->name('Update.Password');
    // give user reward
    Route::get('Give/Reward/{id}', [AdminDashboardController::class, 'give_reward'])->name('Give.Reward');
    Route::post('Store/Reward/{id}', [AdminDashboardController::class, 'store_reward'])->name('Store.Reward');
    // notification
    Route::get('Notification/View', [AdminDashboardController::class, 'notification'])->name('Notification.View');
    Route::post('Store/Notification', [AdminDashboardController::class, 'store_notification'])->name('Store.Notification');

    Route::get('Rejected/Users', [AdminDashboardController::class, 'rejectedUsers'])->name('Rejected.Users');
    Route::get('Approved/Users', [AdminDashboardController::class, 'approvedUsers'])->name('Approved.Users');
    Route::get('Pending/Users', [AdminDashboardController::class, 'pendingUsers'])->name('Pending.Users');
    Route::get('Reject/User/{id}', [AdminDashboardController::class, 'rejectUser'])->name('Reject.Users');
    Route::get('Approve/User/{id}', [AdminDashboardController::class, 'approvedUser'])->name('Approve.Users');
    Route::get('Pending/User/{id}', [AdminDashboardController::class, 'pendingUser'])->name('Pending.User');
    // Plans routes
    Route::get('Add/Plan', [PlansController::class, 'add'])->name('Add.Plan');
    Route::post('Store/Plan', [PlansController::class, 'store'])->name('Store.Plan');
    Route::get('All/Plan', [PlansController::class, 'index'])->name('All.Plan');
    Route::get('Delete/Plan/{id}', [PlansController::class, 'delete_plan'])->name('Delete.Plan');
    Route::get('Lock/Plan/{id}', [PlansController::class, 'lockPlan'])->name('Lock.Plan');
    Route::get('Unlock/Plan/{id}', [PlansController::class, 'unLockPlan'])->name('Unlock.Plan');
    // Setting Routes
    Route::get('Referral/Setting', [SettingController::class, 'referSetting'])->name('Referral.Setting');
    Route::get('Edit/Referral/Setting/{id}', [SettingController::class, 'editReferSetting'])->name('Edit.Referral.Setting');
    Route::post('Update/Referral/Setting/{id}', [SettingController::class, 'updateReferSetting'])->name('Update.Referral.Setting');
    Route::get('Edit/Bank/Details', [SettingController::class, 'editBankDetails'])->name('Edit.Bank.Detials');
    Route::post('Update/Bank/Details/{id}', [SettingController::class, 'updateBankDetails'])->name('Update.Bank.Detials');

    // Deposit requests
    Route::get('Deposit/Requests', [AdminDashboardController::class, 'deposits'])->name('Deposit.Requests');
    Route::get('Approved/Requests', [AdminDashboardController::class, 'approvedDeposit'])->name('Approved.Deposit');
    Route::get('Rejected/Requests', [AdminDashboardController::class, 'rejectedDeposit'])->name('Rejected.Deposit');
    Route::get('Approve/Deposit/{id}', [AdminDashboardController::class, 'approveDeposit'])->name('Approve.Deposit.Requests');
    Route::get('Reject/Deposit/{id}', [AdminDashboardController::class, 'rejectDeposit'])->name('Reject.Deposit.Requests');
    Route::get('Pending/Deposit/{id}', [AdminDashboardController::class, 'pendingDeposit'])->name('Pending.Deposit.Requests');
    Route::get('Add/Deposit/{id}', [AdminDashboardController::class, 'addDeposit'])->name('Add.Deposit.Requests');
    Route::post('Update/Deposit/{id}', [AdminDashboardController::class, 'updateDeposit'])->name('Update.User.Account');
    // withdraw routes
    Route::get('Pending/Withdraw', [WithdrawController::class, 'pending'])->name('Pending.Withdraw');
    Route::get('Approved/Withdraw', [WithdrawController::class, 'approved'])->name('Approved.Withdraw');
    Route::get('Rejected/Withdraw', [WithdrawController::class, 'rejected'])->name('Rejected.Withdraw');
    Route::get('Make/Withdraw/Pending/{id}', [WithdrawController::class, 'make_pending'])->name('Make.Withdraw.Pending');
    Route::get('Make/Withdraw/Rejected/{id}', [WithdrawController::class, 'make_rejected'])->name('Make.Withdraw.Rejected');
    Route::get('Make/Withdraw/Approved/{id}', [WithdrawController::class, 'make_approved'])->name('Make.Withdraw.Approved');
});
