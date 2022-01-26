<?php 

require_once dirname(__DIR__)."/model/Clientes.php";

class ClientesController {
    public function cadastraClientes($name, $cpf, $endereco, $email, $data_nascimento) {
        $clientes = new Clientes();
        $clientes->setClientes($name, $cpf, $endereco, $email, $data_nascimento);
    }
}