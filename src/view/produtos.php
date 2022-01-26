<?php 
require_once dirname(__DIR__)."/model/Produtos.php";
$produtos = new Produtos();
?>

<section class="clientes wrap">
    <h1 class="header-content">Produtos</h1>

    <table class="table-products">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <?php $produtos->getProdutos(); ?>
        </tbody>
    </table>
</section>