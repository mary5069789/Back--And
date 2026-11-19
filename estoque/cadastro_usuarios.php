<?php

include "config/conexao.php";
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senha = password_hash($senha, PASSWORD_DEFAULT);
$sql = "SELECT*FROM usuário
WHERE email= '$email'";

$resultado = $conexao->query($sql);
if ($resultado->rowCount() > 0) {
    echo "Erro: este e-mail  já está cadastrado.";
} else {
    $sql = "INSERT INTO usuário (nome,email,senha) VALUES ('$nome','$email','$senha')";

    if ($conexao->query($sql)) {
        echo "Usuario cadastrado com sucesso!";
        echo "<br><a href='login.html'>Fazer login</a>";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
