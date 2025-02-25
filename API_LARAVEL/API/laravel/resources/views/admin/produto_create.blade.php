@extends('master')

@section('content')
    <h2>Formulario Produto</h2>

    <form method="POST" action="{{ route('produto.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do produto</label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp"
                placeholder="Nome do produto">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do produto">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <a href="{{ route('home') }}">Voltar</a>
    <a href="{{ route('produto.index') }}">Listar</a>
@endsection
