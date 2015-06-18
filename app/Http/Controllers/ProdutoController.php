<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller {

  //Método de consulta e listagem dos produtos
  public function lista() {



    $produtos = DB::select('SELECT * FROM PRODUTOS');


    return view('listagem')->with('produtos', $produtos);
  }


}//fim da classe
