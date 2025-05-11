<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function today()
    {
        $students = Student::all();
        $today = Carbon::today()->toDateString();
        return view('attendance.today', compact('students', 'today'));
    }

    public function store(Request $request)
    {
        $today = Carbon::today()->toDateString();
        $request->validate([
            'attendance' => 'required|array',
            'attendance.*' => 'in:present,absent',
        ]);

        foreach ($request->attendance as $studentId => $status) {
            Attendance::updateOrCreate(
                ['student_id' => $studentId, 'date' => $today],
                ['status' => $status]
            );
        }

        return redirect()->route('attendance.today');
    }

    public function report(Student $student)
    {
        $attendances = $student->attendances()->orderBy('date', 'desc')->get();
        return view('attendance.report', compact('student', 'attendances'));
    }
}