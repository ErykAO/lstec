@extends('layouts.app')

@section('title', 'Biblioteca de Filmes')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="text-center" style="margin-top: 50px">Biblioteca de Filmes</h1>
        </div>
        <div class="col-sm-2 mt-5">
            <a href="{{route('filmes-create')}}" class="btn btn-success">ADICIONAR FILME</a>
        </div>
    </div>
        <table class="table table-striped table-hover">
            <br>
            <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Gênero</th>
                <th scope="col">Ano de Lançamento</th>
                <th scope="col">Duração</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($filmes as $filme)

                <tr>
                    <th>{{ $filme->id }}</th>
                    <th>{{ $filme->nome }}</th>
                    <th>{{ $filme->genero }}</th>
                    <th>{{ $filme-> ano_lancamento }}</th>
                    <th>{{ $filme->duracao }} Minutos</th>
                    <th class="d-flex">

                        <a href="{{route('filmes-edit', ['id'=>$filme->id])}}" class="btn btn-sm btn-primary me-2">
                            Editar
                        </a>
                        <form action="{{route('filmes-destroy', ['id'=>$filme->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Deletar</button>

                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
