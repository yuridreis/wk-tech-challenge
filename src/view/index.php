<?php 

class Index {
    public static function index() {
        $view = require dirname(__DIR__)."/view/header.php";
        $view += require dirname(__DIR__)."/view/clientes.php";
        $view += require dirname(__DIR__)."/view/produtos.php";
        $view += require dirname(__DIR__)."/view/vendas.php";
        $view += require dirname(__DIR__)."/view/create-content.php";
    }
}