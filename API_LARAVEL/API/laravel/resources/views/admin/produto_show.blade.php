@extends('master')

@section('content')
    <h2>{{ $produto->nome }}</h2>

    <form>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="nome" value="{{ $produto->nome }}" readonly>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input class="form-control" type="text" name="nome" value="{{ $produto->descricao }}" readonly>
        </div>
    </form>

    <a href="{{ route('produto.index') }}">Voltar</a>
@endsection
