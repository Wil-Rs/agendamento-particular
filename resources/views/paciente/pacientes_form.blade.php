@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <h1 class="text-center w-100">Novo Usuário</h1>
    </div>

    <div class="border p-5">

        @if( Request::is('*/editar') )
            <form method="POST" action="{{ url("pacientes/update")}}/{{$paciente->id}}">
        @else
            <form method="POST" action="{{ url( "pacientes/create" ) }}">
        @endif

            @csrf
            <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="name" id="nome" placeholder="Nome" value="{{ $paciente->name??"" }}">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" class="form-control" id="cpf" placeholder="Cpf" value="{{ $paciente->cpf??"" }}">
            </div>
            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" name="idade" class="form-control" id="idade" placeholder="Idade" value="{{ $paciente->idade??"" }}">
            </div>
            <div class="form-group">
                <label for="peso">Peso em Kg</label>
                <input type="number" name="peso" class="form-control" id="peso" placeholder="Peso" value="{{ $paciente->peso??"" }}">
            </div>
            <div class="form-group">
                <label for="altura">Altura em Cm</label>
                <input type="number" name="altura" class="form-control" id="altura" placeholder="Altura" value="{{ $paciente->altura??"" }}">
            </div>
                
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>


</div>

@endsection