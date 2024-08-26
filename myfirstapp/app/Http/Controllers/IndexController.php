<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function display()
    {
        // index vanne view lai return gardiyo
        return view('index');
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
