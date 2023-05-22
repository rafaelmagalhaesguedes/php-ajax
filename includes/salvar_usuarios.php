<?php
require_once "config.php";

$bd = new BaseDeDados();
$bd->connect();
$conexao = $bd->getConnection();

if (mysqli_connect_errno()) {
    echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    exit();
}

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];

/* Nesse código, utilizamos prepared statements com o uso de placeholders (?) 
nas consultas SQL. Em seguida, preparamos a consulta usando $conexao->prepare($sql)
e usamos $stmt->bind_param() para vincular os valores aos placeholders na ordem correta.
Dessa forma, os valores de $nome, $email e $id são tratados de forma segura e não permitem
a execução de código malicioso.
*/
if ($id != "") {
    $sql = "UPDATE usuarios SET nome=?, email=? WHERE id=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssi", $nome, $email, $id);
} else {
    $sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $nome, $email);
}

if ($stmt->execute()) {
    echo "Usuário salvo com sucesso.";
} else {
    echo "Erro ao salvar usuário: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
