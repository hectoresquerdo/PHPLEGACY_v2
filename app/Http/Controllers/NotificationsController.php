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
                                ->get();

        return view('notifications.teacherDAM', $notification);

    }
    function viewDAW(){

        $notification['notifications']= Notifications::select("*")
                                  ->get();

        return view('notifications.teacherDAW', $notification);

    }
}
