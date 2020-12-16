<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WorksController extends Controller
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
            $data['works']=Works::paginate(50);
            return view('admin.works.create', $data);
        }
        if(auth::user()->tipo == '2'){
            $DAM = DB::table('works')
            ->where('course', '=', 'DAM')
            ->get();

            $data['works']=$DAM;
            return view('teacherDAM.works.index', $data);
        }
        if(auth::user()->tipo == '3'){
            $DAM = DB::table('works')
            ->where('course', '=', 'DAW')
            ->get();

            $data['works']=$DAM;
            return view('teacherDAW.works.index', $data);
        }
        if(auth::user()->tipo == '4'){
            $id=auth::user()->id;
            $course=auth::user()->course;

            $DAM = DB::table('works')
            ->where('id_student', '=', $id)
            ->where('course', '=', $course)
            ->get();

            $data['works']=$DAM;
            return view('userDAM.works.index', $data);
        }
        if(auth::user()->tipo == '5'){
            $id=auth::user()->id;
            $course=auth::user()->course;

            $DAW = DB::table('works')
            ->where('id_student', '=', $id)
            ->where('course', '=', $course)
            ->get();

            $data['works']=$DAW;
            return view('userDAW.works.index', $data);
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
        //
        $dataWorks=request()->all();

        $dataWorks=request()->except('_token');

        Works::insert($dataWorks);

        return redirect()->route('works.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function show(Works $works)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $work= Works::findOrFail($id);

        if(auth::user()->tipo == '1'){
            return view('admin.works.edit', compact('work'));
        }
        if(auth::user()->tipo == '2'){
             return view('teacherDAM.works.edit', compact('work'));
        }
        if(auth::user()->tipo == '3'){
            return view('teacherDAW.works.edit', compact('work'));
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dataWorks=request()->except(['_token', '_method']);
        Works::where('id','=',$id )->update($dataWorks);

        $work= Works::findOrFail($id);
        return redirect()->route('works.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Works::destroy($id);

        return redirect('/admin/works/create');
    }
}
