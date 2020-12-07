<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;

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
        $data['works']=Works::paginate(50);
        return view('admin.works.create', $data);
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
        return view('admin.works.edit', compact('work'));
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
