<?php 
class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "challenge";

    protected function connect() {
        $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }

    protected function test() {
        echo "hello world;";
    }
}
