@extends('master')

@section('content')
    <h2>Editar Produto</h2>

    @if (@session()->has('msg'))
        {{ session()->get('msg') }}    
    @endif

    <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}"
                placeholder="Nome do produto">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $produto->descricao }}" placeholder="Descrição do produto">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <a href="{{ route('produto.index') }}">Voltar</a>
@endsection
