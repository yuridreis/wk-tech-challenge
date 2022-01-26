<?php 

require_once dirname(__DIR__)."/model/model.php";

class Produtos extends Database {
    
    public function getProdutos() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            $id = $row['id'];
            $nome = $row['nome'];
            $valor = $row['valor'];

            echo
            "<tr>
            <td>$id</td>
            <td>$nome</td>
            <td>$valor</td>
            </tr>";
        }
    }

    public function setProdutos($name, $valor) {
        $sql = "INSERT INTO produtos(nome, valor) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $valor]);
    }


}