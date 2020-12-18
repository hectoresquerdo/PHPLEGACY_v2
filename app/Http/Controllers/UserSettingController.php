<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

      return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $id=auth::user()->id;

            $user = DB::table('users')
            ->where('id', '=', $id)
            ->get();

        if(auth::user()->tipo == '1'){
            $data['perfiles']=$user;
            return view('admin.profile.create', $data);
        }else{

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

        User::insert($dataWorks);

        return redirect()->route('profile.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::findOrFail($id);

        if(auth::user()->tipo == '1'){
            return view('admin.profile.edit', compact('user'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dataWorks=request()->except(['_token', '_method']);
        User::where('id','=',$id )->update($dataWorks);

        $user= User::findOrFail($id);
        return redirect()->route('profile.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
        User::destroy($id);

        return redirect('/admin/profile/create');
    }
}
