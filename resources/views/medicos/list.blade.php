@extends( 'layouts.app' )

@section('content')

<div class="container back">
    <div class="row">
        <div class="col-xs-12 col-md-9">
            <h1 class="text-center w-100">Médicos cadastrados</h1>
        </div>
        <div class="col-xs-12 col-md-3">
            <a class="btn btn-primary d-flex justify-content-center mb-5" href="{{ url('medicos/novo') }}">Novo Médico</a>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th class="text-center" colspan="2" scope="col" >Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach( $user as $u )

                    <tr>
                        <td class="text-center"> {{ $u->name }} </td>
                        <td class="text-center"> {{ $u->email }} </td>
                        <td class="text-center"> <a class="btn btn-warning" href="/medicos/{{$u->id}}/editar">Editar</a> </td>
                        <td class="text-center"> 
                            <form action="/medicos/deletar/{{ $u->id }}" method="POST">
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