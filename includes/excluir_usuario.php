<?php
require_once "includes/config.php";

// Conexão com a base de dados
$bd = new BaseDeDados();
$bd->connect();
$conexao = $bd->getConnection();

try {
    if (mysqli_connect_errno()) {
        throw new Exception("Falha ao conectar com o MySQL: " . mysqli_connect_error());
    }

    // Recebe o valor do ID
    $id = $_POST["id"];

    // Utilize prepared statements para evitar SQL injection
    $sql = "DELETE FROM usuarios WHERE id = ?";
    
    /* Em seguida, usamos o método bind_param para vincular o 
    valor da variável $id ao espaço reservado na consulta. 
    Isso garante que o valor seja tratado como um parâmetro 
    e não como parte do comando SQL. */
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Usuário excluído com sucesso.";
    } else {
        throw new Exception("Erro ao excluir usuário: " . $stmt->error);
    }
} catch (Exception $e) {
    echo "Ocorreu um erro: " . $e->getMessage();
}

$conexao->close();
?>
