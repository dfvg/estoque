<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;
use estoque\Http\Request\ProdutosRequest;

class ProdutoController extends Controller {

  //Método de consulta e listagem dos produtos
  public function lista() {

    $produtos = Produto::all();
    return view('produto.listagem')->with('produtos', $produtos);

  }

  //Método de consulta para a página de detalhes de produto
  public function mostra($id) {

    $produto = Produto::find($id);
    if(empty($produto)) {
      return "<h3>Esse produto não existe</h3>";
    }
    return view('produto.detalhes')->with('p', $produto);
  }

  //Método para chamar o formulário de novos produtos
  public function novo() {

    return view('produto.formulario');
  }

  //Método para adicionar novos produtos
  public function adiciona(ProdutosRequest $request) {

    Produto::create($request->all());

    return redirect()
    ->action('ProdutoController@lista')
    ->withInput(Request::only('nome'));
  }

  //Método para exibir JSON
  public function listaJSON() {

    $produtos = Produto::all();
    return response()->json($produtos);
  }

  //Método para remover produtos
  public function remove($id) {

    $produto = Produto::find($id);
    $produto->delete();
    return redirect()
    ->action('ProdutoController@lista')
    ->withInput(Request::only('nome'));
  }

  //Método para chamar o formulario e editar produtos
  public function editar($id) {

    $produto = Produto::find($id);
    if (empty($produto)) {
      return '<h3>Este produto não existe</h3>';
    }
    return view('produto.formulario-editar')->with('p', $produto);
  }

  //Método para atualizar produtos
  public function atualiza($id) {

    $produto = Produto::find($id);
    $produto->update(Request::all());
    return redirect()
    ->action('ProdutoController@lista')
    ->withInput(Request::only('nome'));
  }


}//fim da classe
