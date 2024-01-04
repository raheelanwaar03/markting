<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\PlansController;
use Illuminate\Support\Facades\Route;

Route::prefix('Admin/')->name('Admin.')->middleware('auth', 'admin')->group(function () {

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    // Plans routes
    Route::get('All/Users',[AdminDashboardController::class,'allUsers'])->name('All.Users');
    Route::get('Rejected/Users',[AdminDashboardController::class,'rejectedUsers'])->name('Rejected.Users');
    Route::get('Approved/Users',[AdminDashboardController::class,'approvedUsers'])->name('Approved.Users');
    Route::get('Pending/Users',[AdminDashboardController::class,'pendingUsers'])->name('Pending.Users');
    Route::get('Reject/User/{id}',[AdminDashboardController::class,'rejectUser'])->name('Reject.Users');
    Route::get('Approve/User/{id}',[AdminDashboardController::class,'approvedUser'])->name('Approve.Users');
    Route::get('Pending/User/{id}',[AdminDashboardController::class,'pendingUser'])->name('Pending.User');
    Route::get('Add/Plan',[PlansController::class,'add'])->name('Add.Plan');
    Route::post('Store/Plan',[PlansController::class,'store'])->name('Store.Plan');
    Route::get('All/Plan',[PlansController::class,'index'])->name('All.Plan');

});
