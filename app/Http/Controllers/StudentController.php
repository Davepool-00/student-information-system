<?php // app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        // Retrieve students with their associated courses
        $students = Student::with('courses')->get();
        return view('students.index', compact('students'));
    }
}
