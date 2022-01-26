<?php 
require_once dirname(__DIR__)."/model/Vendas.php";
$vendas = new Vendas();
?>

<section class="clientes wrap">
    <h1 class="header-content">Vendas</h1>

    <table class="table-products">
        <thead>
            <th>Id</th>
            <th>Id Cliente</th>
            <th>Data Compra</th>
            <th>Valor Total</th>
        </thead>
        <tbody>
            <?php $vendas->getVendas(); ?>
        </tbody>
    </table>
</section>