<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamsController extends Controller
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
            $data['exams']=Exams::paginate(50);
            return view('admin.exams.create', $data);
        }
        if(auth::user()->tipo == '2'){
            $class=auth::user()->class;

            $DAM = DB::table('exams')
            ->where('course', '=', 'DAM')
            ->where('id_class', '=', $class)
            ->get();

            $data['exams']=$DAM;
            return view('teacherDAM.exams.index', $data);
        }
        if(auth::user()->tipo == '3'){
            $class=auth::user()->class;

            $DAM = DB::table('exams')
            ->where('course', '=', 'DAW')
            ->where('id_class', '=', $class)
            ->get();

            $data['exams']=$DAM;
            return view('teacherDAW.exams.index', $data);
        }
        if(auth::user()->tipo == '4'){
            $id=auth::user()->id;
            $course=auth::user()->course;

            $DAM = DB::table('exams')
            ->where('id_student', '=', $id)
            ->where('course', '=', $course)
            ->get();

            $data['exams']=$DAM;
            return view('userDAM.exams.index', $data);
        }
        if(auth::user()->tipo == '5'){
            $id=auth::user()->id;
            $course=auth::user()->course;

            $DAW = DB::table('exams')
            ->where('id_student', '=', $id)
            ->where('course', '=', $course)
            ->get();

            $data['exams']=$DAW;
            return view('userDAW.exams.index', $data);
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
        $dataExams=request()->all();

        $dataExams=request()->except('_token');

        Exams::insert($dataExams);

        return redirect()->route('exams.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function show(Exams $exams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $exam= Exams::findOrFail($id);
        if(auth::user()->tipo == '1'){
        return view('admin.exams.edit', compact('exam'));
        }
        if(auth::user()->tipo == '2'){
        return view('teacherDAM.exams.edit', compact('exam'));
        }
        if(auth::user()->tipo == '3'){
            return view('teacherDAW.exams.edit', compact('exam'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dataExams=request()->except(['_token', '_method']);
        Exams::where('id','=',$id )->update($dataExams);

        $exam= Exams::findOrFail($id);
        return redirect()->route('exams.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Exams::destroy($id);

        return redirect('/admin/exams/create');
    }
}
