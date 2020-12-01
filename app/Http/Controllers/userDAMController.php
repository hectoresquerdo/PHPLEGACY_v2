<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDAMController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('SoloUserDAM', ['only'=> 'index']);
    }

    public function index()
    {
        return view('userDAM');
    }
    public function getUserDAM(){

        return view ('userDAM');
    }

}
