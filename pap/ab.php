<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scd";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu um erro na conexão
if ($conn->connect_error) {
  die("Erro na conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST["nome"];
$estado = $_POST["estado"];
$gps = $_POST["gps"];
$num_funcionarios = $_POST["funcionarios"];

// Prepara a query SQL
$sql = "INSERT INTO abrigos (nome, estado, gps, funcionarios)
        VALUES ('$nome', '$estado', '$gps', '$num_funcionarios')";

// Executa a query SQL
if ($conn->query($sql) === TRUE) {
  echo "Cadastro realizado com sucesso!";
} else {
  echo "Erro ao cadastrar: " . $conn->error;
}
header("Location: abrigos.php");
// Fecha a conexão com o banco de dados
$conn->close();
?>
