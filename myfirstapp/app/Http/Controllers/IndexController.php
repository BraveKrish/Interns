<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function display()
    {
        // index vanne view lai return gardiyo
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function showForm()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        // $data = $request->all();
        // dd($data);
        // dd($request->password);
        return "form submitted successfully";
    }
}
