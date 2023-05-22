<?php
// Classe de conexão com o banco de dados
class BaseDeDados {

    // Dados de conexão com o Banco
    public function __construct() {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'crud';
    }

    // Método conn
    public function connect() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
        }
    }

    // Método close
    public function close() {
        mysqli_close($this->conn);
    }

    // método GetConnection
    public function getConnection() {
        return $this->conn;
    }
}

?>
