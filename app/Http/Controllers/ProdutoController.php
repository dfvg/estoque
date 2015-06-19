<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

  //Método de consulta e listagem dos produtos
  public function lista() {

    $produtos = DB::select('SELECT * FROM PRODUTOS');
    return view('produto.listagem')->with('produtos', $produtos);

  }

  //Método de consulta para a página de detalhes de produto
  public function mostra($id) {

    $resposta = DB::select('SELECT * FROM PRODUTOS WHERE ID = ?', [$id]);
    if(empty($resposta)) {
      return "<h3>Esse produto não existe</h3>";
    }
    return view('produto.detalhes')->with('p', $resposta[0]);
  }

  //Método para chamar o formulário de novos produtos
  public function novo() {
    return view('produto.formulario');
  }

  //Método para adicionar novos produtos
  public function adiciona() {

    $nome = Request::input('nome');
    $descricao = Request::input('descricao');
    $valor = Request::input('valor');
    $quantidade = Request::input('quantidade');

    DB::insert('INSERT INTO PRODUTOS
      (nome, descricao, valor, quantidade)
      values (?,?,?,?)',
      array($nome, $descricao, $valor, $quantidade)
    );

    return redirect()
    ->action('ProdutoController@lista')
    ->withInput(Request::only('nome'));

  }

  //Método para exibir JSON
  public function listaJSON(){

    $produtos = DB::select('SELECT * FROM PRODUTOS');

    return $produtos;
  }


}//fim da classe
