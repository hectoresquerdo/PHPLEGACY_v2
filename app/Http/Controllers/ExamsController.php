<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use Illuminate\Http\Request;

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
        $data['exams']=Exams::paginate(50);
        return view('admin.exams.create', $data);
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
        return view('admin.exams.edit', compact('exam'));
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
