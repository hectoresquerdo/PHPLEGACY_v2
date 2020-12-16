<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(auth::user()->tipo == '1'){
            $data['schedules']=Schedules::paginate(50);
            return view('admin.schedules.create', $data);
        }
        if(auth::user()->tipo == '2'){
            $DAM = DB::table('schedules')
            ->where('course', '=', 'DAM')
            ->get();

            $data['schedules']=$DAM;
            return view('teacherDAM.schedules.index', $data);
        }
        if(auth::user()->tipo == '3'){
            $DAM = DB::table('schedules')
            ->where('course', '=', 'DAW')
            ->get();

            $data['schedules']=$DAM;
            return view('teacherDAW.schedules.index', $data);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataSchedules=request()->all();

        $dataSchedules=request()->except('_token');

        Schedules::insert($dataSchedules);

        return redirect()->route('schedules.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function show(Schedules $schedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $schedule= Schedules::findOrFail($id);
        if(auth::user()->tipo == '1'){
        return view('admin.schedules.edit', compact('schedule'));
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dataSchedules=request()->except(['_token', '_method']);
        Schedules::where('id','=',$id )->update($dataSchedules);

        $schedule= Schedules::findOrFail($id);
        return redirect()->route('schedules.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Schedules::destroy($id);

        return redirect('/admin/schedules/create');
    }
}
