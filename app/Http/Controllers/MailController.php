<?php

namespace App\Http\Controllers;

use App\Mail\EvaluationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendMail(){

        $details = [
            'title' => 'New Mark notification',
            'body' => 'You have a new Mark in your evaluation page! Check it!'
        ];
        return "mail sent";
        //redirect()->back();
    }
}
