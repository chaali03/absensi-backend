<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;

class AttendanceController extends Controller
{
    // Menampilkan daftar absensi untuk sekretaris
    public function index()
    {
        $attendances = Attendance::with('user')->get();
        return response()->json($attendances);
    }

    // Sekretaris mencatat absensi
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'is_present' => 'required|boolean',
            'reason' => 'nullable|string',
        ]);

        $attendance = Attendance::create($request->all());
        return response()->json(['message' => 'Absensi berhasil disimpan', 'data' => $attendance]);
    }

    // Murid melihat absensinya sendiri
    public function show($id)
    {
        $attendance = Attendance::where('user_id', $id)->get();
        return response()->json($attendance);
    }

    // Sekretaris atau wali kelas melihat rekap absensi semua murid
    public function rekap()
    {
        $rekap = Attendance::with('user')->get();
        return response()->json($rekap);
    }
}
