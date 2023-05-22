<?php

class BaseDeDados {

    public function __construct() {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'crud';
    }

    public function connect() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
        }
    }

    public function close() {
        mysqli_close($this->conn);
    }

    public function getConnection() {
        return $this->conn;
    }
}

?>
