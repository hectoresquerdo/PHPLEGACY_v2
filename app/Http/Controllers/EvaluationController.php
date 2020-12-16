<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{
    function viewDAM(){
        $id=auth::user()->id;

        $evaluation['evaluations'] = Evaluation::select("*")
                        ->where('id', '=', $id)
                        ->get();

        return view('evaluation.userDAM', $evaluation);

    }
    function viewDAW(){
        $id=auth::user()->id;

        $evaluation['evaluations'] = Evaluation::select("*")
                        ->where('id', '=', $id)
                        ->get();

        return view('evaluation.userDAW', $evaluation);

    }
}
