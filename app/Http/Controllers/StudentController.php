<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Redirect to the student registration form.
     */
    public function index()
    {
        return redirect()->route('students.create');
    }

    /**
     * Display the student registration form.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly registered student.
     */
    public function store(Request $request)
    {
        // Validation and database storage will be added later.
        return back();
    }

    /**
     * Display the registered student's information.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}
