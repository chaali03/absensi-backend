<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $attendances = Attendance::all(); // Mengambil semua data absensi
        return view('welcome', compact('attendances'));
    }
}
