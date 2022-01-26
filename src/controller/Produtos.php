<?php 

require_once dirname(__DIR__)."/model/Produtos.php";

class ProdutosController {
    public function cadastraProdutos($name, $valor) {
        $produtos = new Produtos();
        $produtos->setProdutos($name, $valor);
    }
}