@extends('layouts.app')

@section('title', 'Edição de Filmes')

@section('content')

    <div class="container mt-5 ">
        <h1 class="text-center">EDITAR FILME</h1>
        <hr>
        <form action="{{route('filmes-update', ['id'=>$filmes->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card mt-3 mb-3 border-0 shadow-sm">
                <div class="card-header border-0 bg-white">

                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" name="nome" value="{{ $filmes->nome }}" placeholder="Nome">
                        <label for="nome">Nome do Filme</label>
                    </div>

                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" name="genero" value="{{ $filmes->genero }}" placeholder="Genero" >
                        <label for="genero">Gênero do Filme</label>
                    </div>

                    <div class="form-floating mb-5">
                        <input type="number" class="form-control" name="ano_lancamento" value="{{ $filmes->ano_lancamento }}" placeholder="Ano">
                        <label for="ano_lancamento">Ano de Lançamento</label>
                    </div>

                    <div class="form-floating mb-5">
                        <input type="number" class="form-control" name="duracao" value="{{ $filmes->duracao }}" placeholder="Duracao">
                        <label for="duracao">Duração do Filme</label>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                    </div>

                </div>
            </div>
        </form>
    </div>


@endsection

