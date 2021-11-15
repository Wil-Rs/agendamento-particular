<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\Models\Paciente;
use App\Models\Agendamento;
use App\Models\User;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userLodado = Auth::user()->id;
        $agendas = User::with('agendamentos')->findOrFail( $userLodado );
        // return $agendas->toJson();
        return view('agendamentos.agendamentos_list', ['agendas' => $agendas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $medico = Auth::user();
        return view('agendamentos.agendamentos_form', ['pacientes' => $pacientes, 'medico' => $medico]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agendamento = new Agendamento;
        $agendamento->create( $request->all() );
        return redirect('/agendamentos');
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
        // $agendamento = Agendamento::where( ['id' => $id] )->get();
        $agendamento = Agendamento::findOrFail($id);
        $pacientes = Paciente::all();
        $medico = Auth::user();
        // return $agendamento->toJson();
        return view('agendamentos.agendamentos_form', ['agendamento' => $agendamento, 'medico' => $medico, 'pacientes' => $pacientes]);
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
        $agendamento = Agendamento::findOrFail( $id );
        $agendamento->update( $request->all() );
        return redirect('/agendamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail( $id );
        $agendamento->delete();
        return redirect('/agendamentos');
    }
}