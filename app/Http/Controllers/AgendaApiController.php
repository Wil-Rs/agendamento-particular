<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use Illuminate\Support\Facades\Auth;


class AgendaApiController extends Controller
{
    public function index() {
        $user = Auth::user()->id;
        $agenda = Agendamento::where(['user_id' => $user])->get();
        return response()->json([
            $agenda
        ]);
    }
}
