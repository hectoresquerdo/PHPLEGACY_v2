<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDAWController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('SoloUserDAW', ['only'=> 'index']);
    }

    public function index()
    {
        return view('userDAW');
    }
    public function getUserDAW(){

        return view ('userDAW');
    }

}
