@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="text-center w-100">Pacientes cadastrados</h1>
        </div>
        <div class="col-2">
            <a class="btn btn-primary" href="{{ url('pacientes/novo') }}">Novo Paciente</a>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">CPF</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Altura</th>
                <th class="text-center" colspan="2" scope="col" >Ações</th>
              </tr>
            </thead>
            <tbody>
                {{-- {{$pacientes}} --}}
                @foreach( $pacientes as $p )

                    <tr>
                        <th class="text-center"> {{ $p->cpf }} </th>
                        <td class="text-center"> {{ $p->name }} </td>
                        <td class="text-center"> {{ $p->idade }} </td>
                        <td class="text-center"> {{ $p->altura }} </td>
                        <td class="text-center"> <a class="btn btn-warning" href="/pacientes/{{$p->id}}/editar">Editar</a> </td>
                        <td class="text-center"> 
                            <form action="/pacientes/deletar/{{ $p->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Apagar</button> 
                            </form>
                        </td>
                    </tr>

                @endforeach
              
            </tbody>
          </table>
    </div>

</div>

@endsection