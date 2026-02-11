<?php

use App\Http\Controllers\PositionController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::resource('workers', WorkerController::class);

Route::resource('positions', PositionController::class);
