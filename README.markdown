# Student Attendance Tracker

A Laravel-based web application for managing student attendance. Admins can add students, mark daily attendance (present/absent), and view date-wise attendance reports for each student.

## Project Setup Steps
1. **Install XAMPP**:
   - Download and install XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/).
   - Start Apache and MySQL from the XAMPP Control Panel.

2. **Install Composer**:
   - Download and install Composer from [https://getcomposer.org/](https://getcomposer.org/).
   - Verify: `composer --version`.

3. **Set Up Project**:
   - Navigate to `C:\xampp\htdocs` in Command Prompt.
   - Run: `composer create-project laravel/laravel student-attendance-tracker`.
   - Navigate to project: `cd student-attendance-tracker`.

4. **Configure Database**:
   - In phpMyAdmin, create a database named `student_attendance`.
   - Update `.env`:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=student_attendance
     DB_USERNAME=root
     DB_PASSWORD=
     ```

5. **Run Migrations**:
   - Run: `php artisan migrate`.

6. **Start Server**:
   - Run: `php artisan serve`.
   - Access at `http://localhost:8000`.

## Routes and Purpose
- **GET /students**: View all students and add new ones.
- **POST /students**: Create a new student.
- **DELETE /students/{id}**: Delete a student.
- **GET /attendance/today**: View and mark attendance for today.
- **POST /attendance/today**: Save today's attendance.
- **GET /attendance/{student}**: View attendance report for a specific student.

## Key Pages
- **Manage Students**: List of students with options to add, delete, or view attendance.
- **Mark Attendance**: Table to mark present/absent for all students for today.
- **Attendance Report**: Date-wise attendance history for a selected student.

## Assumptions
- No authentication is implemented (admin access assumed).
- Attendance is marked daily, and duplicate entries for the same student/date are prevented via a unique constraint.
- Uses Tailwind CSS for styling via CDN.

## Known Bugs
- None identified during development.

## Git Commit Checkpoints
1. Initial Laravel install and setup.
2. Student model, migration, controller created.
3. Attendance model, migration, controller created.
4. Attendance logic and validations implemented.
5. Student attendance report completed.
6. Final touches, code cleanup, and README.