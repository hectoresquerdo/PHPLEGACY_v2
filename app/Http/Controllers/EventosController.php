<?php

namespace App\Http\Controllers;

use App\Models\evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(auth::user()->tipo == '1'){
            return view("eventos/index");
        }
        if(auth::user()->tipo == '2'){
            return view("eventos/teacherDAM");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
        $eventData=request()->except(['_token','_method']);
        evento::insert($eventData);
        print_r($eventData);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(auth::user()->tipo == '1'){

            $data['eventos']=evento::all();
            return response()->json($data['eventos']);
        }
        if(auth::user()->tipo == '2'){
            $DAM = DB::table('eventos')
            ->where('course', '=', 'DAM')
            ->get();
            $data['eventos']=$DAM;
            return response()->json($data['eventos']);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $eventData=request()->except(['_token','_method']);
        $respuesta=evento::where('id','=',$id)->update($eventData);
        return response()->json($respuesta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $eventos=evento::findOrFail($id);
        evento::destroy($id);
        return response()->json($id);
    }
}
