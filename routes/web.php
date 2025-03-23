<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
=======
use App\Models\Attendance;

Route::get('/', function () {
    $attendances = Attendance::all();
    return view('welcome', compact('attendances'));
>>>>>>> 5c2bba03ed490e07cdda0061a5ee32b07d8cdffd
});
