@extends('master')

@section('content')
    @if (@session()->has('msg'))
        {{ session()->get('msg') }}
    @endif

    <h2>Listando Produtos</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">View</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}"><i class="bi bi-eye"></i></a></td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td><a type="button" class="btn btn-primary"
                            href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Editar</button></td>

                    <td>
                        <form action="{{ route('produto.destroy', ['produto' => $produto->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('produto.create') }}">Criar</a>
@endsection
