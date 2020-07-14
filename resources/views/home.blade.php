@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="jumbotron">
                        <h1 class="display-4">Status de Estudantes</h1>
                        <div class="conteiner">
                            <div class="row">
                                <div class="col">
                                    <div class="card  bg-success">
                                        <div class="card-header">Finalizados</div>
                                        <div class="card-body">
                                            {{ $studantsStatus['Finalizado'] ?? 0 }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card  bg-info">
                                        <div class="card-header">Em andamento</div>
                                        <div class="card-body">
                                            {{ $studantsStatus['Em andamento'] ?? 0 }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card bg-danger">
                                        <div class="card-header">Atrasado</div>
                                        <div class="card-body">
                                            {{ $studantsStatus['Em atraso'] ?? 0 }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection