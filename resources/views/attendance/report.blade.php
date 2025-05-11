@extends('layouts.app')
@section('content')
    <h1>Attendance Report for {{ $student->name }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->date }}</td>
                    <td>{{ ucfirst($attendance->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Students</a>
@endsection