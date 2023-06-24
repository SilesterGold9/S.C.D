<?php
session_start();

if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    require("conexao.php");

    $adm  = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];

    if(!$adm) {
        // Usuário não tem permissão para excluir
        die("Você não tem permissão para excluir usuários.");
    }

    if(!isset($_GET["id"]) || empty($_GET["id"])) {
        // ID do usuário não foi fornecido
        die("ID do usuário não fornecido.");
    }

    $id = $_GET["id"];

    // Verifica se o ID do usuário é válido
    $query = $conexao->prepare("SELECT COUNT(*) FROM users WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    $numUsuarios = $query->fetchColumn();

    if($numUsuarios == 0) {
        // ID do usuário inválido
        die("ID do usuário inválido.");
    }

    // Exclui o usuário do banco de dados
    $query = $conexao->prepare("UPDATE users SET adm = 8 WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    echo "<script>alert ('Usuario Bloqueado')</script>";

    echo "<script>window.location = 'dashboard.php'</script>";
} else {
    echo "<script>window.location = 'index.html'</script>";
}
?>
