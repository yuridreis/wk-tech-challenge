<?php 

require_once dirname(__DIR__)."/model/Vendas.php";

class VendasController {
    public function cadastraVendas($id_cliente, $data_hora, $valor) {
        $vendas = new Vendas();
        $vendas->setVendas($id_cliente, $data_hora, $valor);
    }
}