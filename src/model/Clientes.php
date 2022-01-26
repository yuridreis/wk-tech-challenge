<?php 

require_once dirname(__DIR__)."/model/model.php";

class Clientes extends Database {
    
    public function getClientes() {
        $sql = "SELECT * FROM clientes";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            $id = $row['id'];
            $nome = $row['nome'];
            $cpf = $row['cpf'];
            $endereco = $row['endereco'];
            $email = $row['email'];
            $data_nascimento = $row['data_nascimento'];

            echo
            "<tr>
                <td>$id</td>
                <td>$nome</td>
                <td>$cpf</td>
                <td>$endereco</td>
                <td>$email</td>
                <td>$data_nascimento</td>
            </tr>";
        }
    }

    public function setClientes($name, $cpf, $endereco, $email, $data_nascimento) {
        $sql = "INSERT INTO clientes(nome, cpf, endereco, email, data_nascimento) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $cpf, $endereco, $email, $data_nascimento]);
    }


}