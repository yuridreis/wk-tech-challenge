<?php 
require_once dirname(__DIR__)."/model/Clientes.php";
$clientes = new Clientes();
?>

<section class="clientes wrap">
    <h1 class="header-content">Clientes</h1>

    <table class="table-products">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>E-mail</th>
            <th>Data de Nascimento</th>
        </thead>
        <tbody>
            <?php $clientes->getClientes(); ?>
        </tbody>
    </table>
</section>