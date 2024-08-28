<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
// use App\Models\Student;

class StudentController extends Controller
{

    // public function showStudent()
    // {
    //     $students = Student::all();
    //     return view('welcome', compact('students'));
    // }
    public function createStudent()
    {
        return view('student_form');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Student::create($request->all());
        return redirect()->route('create')->with('message', 'Student created successfully');
    }
}
