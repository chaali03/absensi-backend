<?php

use Illuminate\Support\Facades\Route;
use App\Models\Attendance;

Route::get('/', function () {
    $attendances = Attendance::all();
    return view('welcome', compact('attendances'));
});
