<?php
require_once "config.php";

try {
    $bd = new BaseDeDados();
    $bd->connect();
    $conexao = $bd->getConnection();

    if (mysqli_connect_errno()) {
        throw new Exception("Falha ao conectar com o MySQL: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexao, $sql);

    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>Nome</th>";
    echo "<th scope='col'>Email</th>";
    echo "<th scope='col'>Editar</th>";
    echo "<th scope='col'>Excluir</th>";
    echo "</tr>";
    echo "</thead>";

    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tbody><tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>";
        echo "<button type='button' class='btn btn-primary btn-sm btn-block' onclick='editarUsuario(" . $row["id"] . ", \"" . $row["nome"] . "\", \"" . $row["email"] . "\")'>Editar</button>";
        echo "</td>";
        echo "<td>";
        echo "<button type='button' class='btn btn-primary btn-sm btn-block' onclick='excluirUsuario(" . $row["id"] . ")'>Excluir</button>";
        echo "</td>";
        echo "</tr></tbody>";
    }

    $conexao->close();
    
} catch (Exception $e) {
    echo "Ocorreu um erro: " . $e->getMessage();
}
?>
