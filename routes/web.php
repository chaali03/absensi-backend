<?php

use App\Http\Controllers\AttendanceController;

Route::get('/', [AttendanceController::class, 'index']);
