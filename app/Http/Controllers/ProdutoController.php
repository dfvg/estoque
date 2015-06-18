<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

  //Método de consulta e listagem dos produtos
  public function lista() {

    $produtos = DB::select('SELECT * FROM PRODUTOS');
    return view('listagem')->with('produtos', $produtos);
  }

  //Chamada para a página de detalhes de produto
  public function mostra($id) {


    $resposta = DB::select('SELECT * FROM PRODUTOS WHERE ID = ?', [$id]);
    if(empty($resposta)) {
      return "<h3>Esse produto não existe</h3>";
    }
    return view('detalhes')->with('p', $resposta[0]);
  }




}//fim da classe
