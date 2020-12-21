<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationsController extends Controller
{
    function viewDAM(){

        $notification['notifications'] = Notifications::select("*")
                                ->where('course', '=', 'DAM')
                                ->get();

        return view('notifications.teacherDAM', $notification);

    }
    function viewDAW(){

        $notification['notifications']= Notifications::select("*")
                                  ->where('course', '=', 'DAW')
                                  ->get();

        return view('notifications.teacherDAW', $notification);

    }
}
