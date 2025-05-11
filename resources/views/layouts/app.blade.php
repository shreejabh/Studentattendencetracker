<!DOCTYPE html>
<html>
<head>
    <title>Student Attendance Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('students.index') }}">Attendance Tracker</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                <a class="nav-link" href="{{ route('attendance.today') }}">Mark Attendance</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>