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
        $validated = $request->validate([
            'student_id' => 'required|unique:students,student_id',

            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',

            'email' => 'required|email|unique:students,email',
            'mobile_number' => 'required|numeric',

            'date_of_birth' => 'required|date|before_or_equal:today',
            'gender' => 'required',

            'program' => 'required',
            'year_level' => 'required|integer|min:1|max:6',

            'address' => 'required',

            'profile_picture' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profilePicturePath = $request
            ->file('profile_picture')
            ->store('profile-pictures', 'public');

        $validated['profile_picture'] = $profilePicturePath;

        $student = Student::create($validated);

        return redirect()
            ->route('students.show', $student)
            ->with('success', 'Student registered successfully!');
    }

    /**
     * Display the registered student's information.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}
