<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view ('Welcome');
});

Route::middleware(['auth:', 'verified'])

->prefix('dashboard')

->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

