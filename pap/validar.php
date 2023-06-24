<?php
session_start();
require_once("conexao.php");

if (isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != null) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST["senha"];

    $query = $conexao->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(":email", $email);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION["usuario"] = array($user["nome"], $user["adm"]);

        if ($user["adm"] == 1) {
            header("Location: dashboard.php");
            exit;
        } elseif ($user["adm"] == 2) {
            header("Location: g_sos.php");
            exit;
        } elseif ($user["adm"] == 3) {
            header("Location: g_casa.php");
            exit;
        } elseif ($user["adm"] == 4) {
            header("Location: g_ninho.php");
            exit;
        } elseif ($user["adm"] == 8) {
            header("Location: no.php");
            exit;
        } else {
            header("Location: index.php");
            exit;
        }
    } else {
        header("Location: index.html");
        exit;
    }
} else {
    header("Location: index.html");
    exit;
}
?>
