<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TraineeDashboardController;
use App\Http\Controllers\websiteController;

Route::get('/',[websiteController::class,'index'])->name('website.home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('role:admin');

Route::get('/trainee/dashboard', [TraineeDashboardController::class, 'index'])->name('trainee.dashboard')->middleware('role:trainee');

});
 