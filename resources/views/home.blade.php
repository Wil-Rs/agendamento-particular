@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header text-center">Opcões</div>
    <div class="row pt-5">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/medico.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Médicos</h5>
                  <p class="card-text">Aqui você pode gerenciar todos os médicos da rede.</p>
                <a class="btn btn-secondary w-100" href="">Médicos</a>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
            
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/paciente.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Pacientes</h5>
                  <p class="card-text">Aqui você poderá cadastrar e consultar seus pacientes.</p>
                  <a class="btn btn-secondary w-100" href="{{ url('/pacientes') }}">Pacientes</a>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
            
            
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/agenda.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Agendamento</h5>
                  <p class="card-text">Aqui você vê e gerencia seus agendamentos.</p>
                  <a class="btn btn-secondary w-100" href="{{ url('/agendamentos') }}">Agendamentos</a>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>            
        </div>
    </div>

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
