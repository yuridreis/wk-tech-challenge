<?php 

require_once dirname(__DIR__)."/model/model.php";

class Vendas extends Database {
    
    public function getVendas() {
        $sql = "SELECT * FROM vendas";
        $stmt = $this->connect()->query($sql);
        $done = false;
        while ($row = $stmt->fetch()) {
            $id = $row['id'];
            $id_cliente = $row['id_cliente'];
            $data_hora = $row['data_hora'];
            $valor_total = $row['valor_total'];

            echo
            "<tr>
            <td>$id</td>
            <td>$id_cliente</td>
            <td>$data_hora</td>
            <td>$valor_total</td>
            </tr>";
        }
    }

    public function setVendas($id_cliente, $data_hora, $valor) {
        $sql = "INSERT INTO vendas(id_cliente, data_hora, valor_total) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_cliente, $data_hora, $valor]);
    }


}