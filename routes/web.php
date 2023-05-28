<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventBroteController;

 Route::get('/', [EventBroteController::class, 'index'])->name('Home');
 Route::resource('Events',EventBroteController::class);
