<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Redirect;
use App\Models\Paciente;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function pacientes(){
        $pacientes = Paciente::all();
        return view('paciente.pacientes_list', ['pacientes' => $pacientes]);
    }

    public function new(){
        return view('paciente.pacientes_form');
    }

    public function create(Request $request){
        $paciente = new Paciente;
        $paciente->create( $request->all() );

        return Redirect::to('/pacientes');
    }

    public function edit($id){
        $paciente = Paciente::findOrFail( $id );
        return view('paciente.pacientes_form', ['paciente' => $paciente]);
    }

    public function update(Request $request, $id){
        $paciente = Paciente::findOrFail( $id );
        $paciente->update( $request->all() );

        return Redirect::to('/pacientes');
    }

    public function delete($id){
        $paciente = Paciente::findOrFail( $id );
        $paciente->delete();

        return Redirect::to('/pacientes');
    }
}
