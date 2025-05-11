@extends('layouts.app')
@section('content')
    <h1>Mark Attendance for {{ $today }}</h1>
    <form method="POST" action="{{ route('attendance.store') }}">
        @csrf
        @foreach ($students as $student)
            <div class="mb-3">
                <label class="form-label">{{ $student->name }} ({{ $student->roll_number }})</label>
                <select name="attendance[{{ $student->id }}]" class="form-control">
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Save Attendance</button>
    </form>
@endsection