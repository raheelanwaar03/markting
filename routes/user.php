<?php

use App\Http\Controllers\user\BuyPlanController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\WidthrawBalanceController;
use Illuminate\Support\Facades\Route;


Route::prefix('User/')->name('User.')->middleware('auth', 'user', 'status')->group(function () {

    Route::get('Dashboard', [UserDashboardController::class, 'index'])->name('Dashboard');
    Route::get('Profile', [UserDashboardController::class, 'profile'])->name('Profile');
    Route::get('Transfer', [UserDashboardController::class, 'transfer'])->name('Transfer');
    Route::post('Store/Deposit', [UserDashboardController::class, 'storeTransfer'])->name('Store.Transfer');
    Route::get('History', [UserDashboardController::class, 'history'])->name('History');
    // Widthraw
    Route::get('Widthraw/View', [WidthrawBalanceController::class, 'widthraw_Balance'])->name('Widthraw.View');
    Route::post('Store/Widthraw', [WidthrawBalanceController::class, 'store_widthraw'])->name('Store.Widthraw');
    Route::get('Add/Wallet', [WidthrawBalanceController::class, 'add_wallet'])->name('Add.Wallet');
    Route::post('Store/Wallet', [WidthrawBalanceController::class, 'store_wallet'])->name('Store.Wallet');
    // buy plan
    Route::post('Buy/Plan/{id}', [BuyPlanController::class, 'buyPlan'])->name('Buy.Plan');
    Route::post('Store/Plan/Details/{id}', [BuyPlanController::class, 'store_plan'])->name('Store.Plan');
    Route::get('Invest/Plan/{id}', [BuyPlanController::class, 'invest'])->name('Invest.Plan');
    Route::get('Store/Invest', [BuyPlanController::class, 'store_invest'])->name('Store.Invest.Plan');
    Route::get('Buy/Plan/view/{id}', [BuyPlanController::class, 'plan_details'])->name('Plan.Details');
});
