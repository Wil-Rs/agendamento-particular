@extends('layouts.app')

@section('content')

<div class="container back">

    <div class="row">
        <h1 class="text-center w-100">Médico</h1>
    </div>

    <div class="border p-5">

        @if( Request::is('*/editar') )
            <form method="POST" action="{{ url("medicos/update")}}/{{$medico->id}}">
        @else
            <form method="POST" action="{{ url( "medicos/create" ) }}">
        @endif

            @csrf
            <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="name" id="nome" placeholder="Nome" value="{{ $medico->name??"" }}">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" class="form-control" id="cpf" placeholder="Cpf" value="{{ $medico->cpf??"" }}">
            </div>
            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" name="idade" class="form-control" id="idade" placeholder="Idade" value="{{ $medico->idade??"" }}">
            </div>
            <div class="form-group">
                <label for="peso">Peso em Kg</label>
                <input type="number" name="peso" class="form-control" id="peso" placeholder="Peso" value="{{ $medico->peso??"" }}">
            </div>
            <div class="form-group">
                <label for="altura">Altura em Cm</label>
                <input type="number" name="altura" class="form-control" id="altura" placeholder="Altura" value="{{ $medico->altura??"" }}">
            </div>
                
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>


</div>

@endsection