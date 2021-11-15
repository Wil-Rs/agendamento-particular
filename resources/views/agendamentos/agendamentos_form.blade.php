@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <h1 class="text-center w-100">Paciente</h1>
    </div>

    @if( Request::is('*/edit') )
        <form action="/agendamentos/update/{{$agendamento->id}}" method="POST">
    @else
        <form action="{{ url('/agendamentos/create') }}" method="POST">
    @endif
        @csrf

        <div class="form-group">
            <label for="paciente_id">Nome</label>
            {{-- <input type="text" class="form-control" id="paciente_id" placeholder="Nome do paciente"> --}}
            <select required class="form-control" name="paciente_id" id="paciente_id" value="{{ $agendamento->paciente_id??'' }}">

                @foreach($pacientes as $p)
                    <option>Selecione um paciente<option>
                    <option value="{{ $p->id }}">{{ $p->name }}</option>

                @endforeach

            </select>
        </div>
        <div class="form-group">
            <label for="data_consulta">Data</label>
            <input type="date" class="form-control" name="data_consulta" id="data_consulta" placeholder="Data da consulta" value="{{ $agendamento->data_consulta??'' }}">
         </div>
        <div class="form-group">
            <label for="hora_consulta">Hora</label>
            <input type="time" class="form-control" name="hora_consulta" id="hora_consulta" placeholder="Hora da consulta" value="{{ $agendamento->hora_consulta??'' }}">
        </div>
        <input type="hidden" name="user_id" type="number" value="{{$medico->id}}">
        
        
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

</div>

@endsection