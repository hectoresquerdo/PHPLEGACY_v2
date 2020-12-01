<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloteacher', ['only'=> 'index']);
    }

    public function index()
    {
        return view('teacher');
    }
    public function getTeacher(){

        return view ('teacher');
    }

}
