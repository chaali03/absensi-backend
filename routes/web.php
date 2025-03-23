<?php

use Illuminate\Support\Facades\Route;
use App\Models\Attendance;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return view('welcome');
});
