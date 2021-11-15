<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Redirect;
use App\Models\Paciente;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view( 'medicos.list', [ 'user' => $user ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'password' => Hash::make('12345678')
        $user = new User;
        $all = $request->all();
        $all['password'] = Hash::make( $request->all()['password'] );
        $all['password_confirmation'] = $all['password'];
        $user->create( $all );
        // dd( $all );
        return Redirect::to('/medicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail( $id );
        return view('auth.register', ['medico' => $user]);
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
        $user = User::findOrFail( $id );
        $up = $request->all();
        if( $up['password'] ){
            $up['password'] = Hash::make( $up['password'] );
            $up['password_confirmation'] = $up['password'];
        }

        $user->update( $up );

        return Redirect::to( '/medicos' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $user = User::findOrFail( $id );
        $user->delete();
        return Redirect::to( '/medicos' );
    }
}
