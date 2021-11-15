@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
      <div class="col-10">
          <h1 class="text-center w-100">Agendamentos</h1>
      </div>
      <div class="col-2">
          <a class="btn btn-primary" href="{{ url('agendamentos/novo') }}">Novo Agendamento</a>
      </div>
  </div>

    <div class="row">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" scope="col">CPF</th>
                <th class="text-center" scope="col">Nome</th>
                <th class="text-center" scope="col">Dia e hr</th>
                <th class="text-center" colspan="2" scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

                @foreach( $agendas->agendamentos as $a )
                    <tr>
                        <td class="text-center">{{ $a->cpf }}</td>
                        <th class="text-center">{{ $a->name }}</th>
                        <td class="text-center">{{ $a->pivot->data_consulta }} as {{  $a->pivot->hora_consulta }}</td>
                        <td class="text-center" class="text-center"> <a class="btn btn-warning" href="/agendamentos/{{$a->pivot->id}}/edit">Editar</a> </td>
                        <td class="text-center"> 
                          <form action="/agendamentos/delete/{{$a->pivot->id}}" method="POST">
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