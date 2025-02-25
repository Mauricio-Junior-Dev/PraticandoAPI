<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public readonly Produto $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function index()
    {
        //TODOS OS REGISTROS DA TABELA

        $produtos = $this->produto->all();
        return view('admin.produto_index', ['produtos' => $produtos]);
    }

    public function create()
    {
        //FORMULARIO DE CADASTRO
        return view('admin.produto_create');
    }

    public function store(Request $request)
    {
        //PEGA OS DADOS DO FORMULARIO E SALVA NO BANCO DE DADOS
        $nome = $request->nome;
        $descricao = $request->descricao;

        $this->produto->nome = $nome;
        $this->produto->descricao = $descricao;
        $this->produto->save();

        return redirect()
            ->route('produto.create')
            ->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function show(Produto $produto)
    {
        //VISUALIZAR O PRODUTO
        return view('admin.produto_show', ['produto' => $produto]);
    }

    public function edit(Produto $produto)
    {
        //FORMULARIO PARA EDITAR OS DADOS
        return view('admin.produto_edit', ['produto' => $produto]);
    }

    public function update(Request $request, Produto $produto)
    {
        //SALVAR ALTERAÇÕES FEITAS NO FORMULARIO DE EDIÇÃO(edit)

        $updated = $produto->where('id', $produto->id)->update($request->except(['_token', '_method']));
        if ($updated) {
            return redirect()
                ->back()
                ->with('msg', 'Produto editado com sucesso!');
        } else {
            return redirect()
                ->back()
                ->with('msg', 'Erro ao editar o produto!');
        }
    }

    public function destroy(Produto $produto)
    {
        if ($produto->delete()) {
            return redirect()
                ->route('produto.index')
                ->with('msg', 'Produto deletado com sucesso!');
        } else {
            return redirect()
                ->route('produto.index')
                ->with('msg', 'Erro ao deletar o produto!');
        }
    }
}
