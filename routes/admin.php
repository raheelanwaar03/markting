<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\PlansController;
use Illuminate\Support\Facades\Route;

Route::prefix('Admin/')->name('Admin.')->middleware('auth', 'admin')->group(function () {

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    // Plans routes
    Route::get('Add/Plan',[PlansController::class,'add'])->name('Add.Plan');
    Route::post('Store/Plan',[PlansController::class,'store'])->name('Store.Plan');

});
