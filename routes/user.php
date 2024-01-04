<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('User/')->name('User.')->middleware('auth', 'user', 'status')->group(function () {

    Route::get('Dashboard', [UserDashboardController::class, 'index'])->name('Dashboard');
    Route::get('Profile', [UserDashboardController::class, 'profile'])->name('Profile');
    Route::get('Transfer', [UserDashboardController::class, 'transfer'])->name('Transfer');
    Route::post('Store/Deposit', [UserDashboardController::class, 'storeTransfer'])->name('Store.Transfer');
    Route::get('History', [UserDashboardController::class, 'history'])->name('History');
});
