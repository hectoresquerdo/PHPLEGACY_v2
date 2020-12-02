<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class scheduleController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');

    }
    public function index(){
        return view('admin.schedule.index');
    }

}
