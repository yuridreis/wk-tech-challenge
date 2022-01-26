<?php 
require_once dirname(__DIR__)."/controller/Clientes.php";
require_once dirname(__DIR__)."/controller/Produtos.php";
require_once dirname(__DIR__)."/controller/Vendas.php";
$clientesController = new ClientesController();
$produtosController = new ProdutosController();
$vendasController = new VendasController();
?>

<section class="fade-clientes fade">
    <div class="popup">
        <form method="POST">
            <h1>Cadastro de Clientes</h1>
            <div>
                <span>Nome</span>
                <input id="form-name" type="text" name="nome-cliente" placeholder="Nome" required>
            </div>
            <div>
                <span>CPF</span>
                <input type="text" name="cpf" placeholder="CPF" required>
            </div>
            <div>
                <span>Endereço</span>
                <input type="text" name="endereco" placeholder="Endereço" required>
            </div>
            <div>
                <span>E-mail</span>
                <input id="form-email" type="email" name="email" placeholder="E-mail" required>
            </div>
            <div>
                <span>Data de Nascimento</span>
                <input type="text" name="data_nascimento" placeholder="Data de Nascimento" required>
            </div>
            <footer>
                <button class="send">Enviar</button>
                <button class="close">Fechar</button>
            </footer>
        </form>
    </div>
</section>

<section class="fade-produtos fade">
    <div class="popup">
        <form method="POST">
            <h1>Cadastro de Produtos</h1>
            <div>
                <span>Nome</span>
                <input id="form-name" type="text" name="nome-produto" placeholder="Nome" required>
            </div>
            <div>
                <span>Valor</span>
                <input type="text" name="valor" placeholder="Valor" required>
            </div>
            <footer>
                <button class="send">Enviar</button>
                <button class="close">Fechar</button>
            </footer>
        </form>
    </div>
</section>

<section class="fade-vendas fade">
    <div class="popup">
        <form method="POST">
            <h1>Cadastro de Vendas</h1>
            <div>
                <span>ID Cliente</span>
                <input type="text" name="id_cliente" placeholder="ID Cliente" required>
            </div>
            <div>
                <span>Data Compra</span>
                <input id="form-name" type="text" name="data_hora" placeholder="Data Compra" required>
            </div>
            <div>
                <span>Valor</span>
                <input type="text" name="valor_total" placeholder="Valor" required>
            </div>
            <footer>
                <button class="send">Enviar</button>
                <button class="close">Fechar</button>
            </footer>
        </form>
    </div>
</section>

<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($_POST['nome-cliente']) {
            $name = $_POST['nome-cliente'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['endereco'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];
    
            $clientesController->cadastraClientes($name, $cpf, $endereco, $email, $data_nascimento);
        }

        if($_POST['nome-produto']) {
            $name = $_POST['nome-produto'];
            $valor = $_POST['valor'];
    
            $produtosController->cadastraProdutos($name, (int) $valor);
        }

        if($_POST['id_cliente']) {
            $id_cliente = $_POST['id_cliente'];
            $data_hora = $_POST['data_hora'];
            $valor = $_POST['valor_total'];
    
            $vendasController->cadastraVendas($id_cliente, $data_hora, (int) $valor);
        }
    }
?>