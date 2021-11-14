<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Redirect;
use App\Models\Paciente;

class AgendamentoController extends Controller
{
    public function agendamentos(){
        $userLodado = Auth::user()->id;
        $agendas = User::with('agendamentos')->findOrFail( $userLodado );
        // return $agendas->toJson();
        return view('agendamentos.agendamentos_list', ['agendas' => $agendas]);
    }
}
