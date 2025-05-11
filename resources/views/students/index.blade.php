@extends('layouts.app')
@section('content')
    <h1>Students</h1>
    <form method="POST" action="{{ route('students.store') }}" class="mb-4">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Roll Number</label>
            <input type="text" name="roll_number" class="form-control" required>
            @error('roll_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->roll_number }}</td>
                    <td>
                        <a href="{{ route('attendance.report', $student) }}" class="btn btn-info btn-sm">View Report</a>
                        <!-- <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection