@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de areas
        <a href="{{ route('areas.create') }}">
            <button class="btn btn-primary">Cadastrar</button>
        </a>
    </h1>

    <table class="table">
        <thead>
            <th scope="col">Descrição</th>
            <th scope="col">Cor</th>
            <th scope="col">Ação</th>
        </thead>
        <tbody>
            @foreach($areas as $area)
            <tr>
                <td>{{ $area->description }}</td>
                <td>{{ $area->color }}</td>
                <td>
                    <a href="{{ route('areas.edit', ['area' => $area->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{ route('areas.destroy', ['area' => $area]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection