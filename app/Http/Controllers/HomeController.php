<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('soloadmin', ['only'=> 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }
    public function getTeacherDAM(){
        return view ('teacherDAM.index');
    }
    public function getTeacherDAW(){
        return view ('teacherDAW.index');
    }
    public function getUserDAM(){
        return view ('userDAM.index');
    }
    public function getUserDAW(){
        return view ('userDAW.index');
    }
}
