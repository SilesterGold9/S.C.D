<?php

include("config.php");

$Nome = $_POST["nome"];
$Email = $_POST["email"];
$Senha = $_POST["senha"];
$Celular = $_POST['celular'];
$ADM = "0";

// Criar o hash da senha
$hashedSenha = password_hash($Senha, PASSWORD_DEFAULT);

// Preparar a declaração SQL
$stmt = $conn->prepare("INSERT INTO users (nome, email, senha, celular, adm) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $Nome, $Email, $hashedSenha, $Celular, $ADM);

// Executar a declaração SQL
if ($stmt->execute()) {
    // Redirecionar para uma página de sucesso
    header("Location: index.html");
    exit();
} else {
    // Exibir mensagem de erro em caso de falha na execução da declaração SQL
    echo "Ocorreu um erro ao inserir os dados na base de dados.";
}

// Fechar a conexão e liberar os recursos
$stmt->close();
$conn->close();

?>
