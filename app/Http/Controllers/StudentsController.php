<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
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
            $users = DB::table('users')
            ->where('tipo', '>=', '4')
            ->get();
            $data['students']=$users;
            return view('admin.students.create', $data);
        }
        if(auth::user()->tipo == '2'){
            $users = DB::table('users')
            ->where('tipo', '=', '4')
            ->get();
            $data['students']=$users;
            return view('teacherDAM.students.index', $data);
        }
        if(auth::user()->tipo == '3'){
            $users = DB::table('users')
            ->where('tipo', '=', '5')
            ->get();
            $data['students']=$users;
            return view('teacherDAW.students.index', $data);
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
        $dataStudents=request()->all();

        $dataStudents=request()->except('_token');

        Users::insert($dataStudents);

        return redirect()->route('students.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student= Users::findOrFail($id);

        if(auth::user()->tipo == '1'){
            return view('admin.students.edit', compact('student'));
        }
        //return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataStudents=request()->except(['_token', '_method']);
        Users::where('id','=',$id )->update($dataStudents);

        $student= Users::findOrFail($id);
        return redirect()->route('students.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Users::destroy($id);

        return redirect('/admin/students/create');
    }
}
