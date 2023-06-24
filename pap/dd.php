<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/huh.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Nexus | Crianças</title>

    <style>
        body {
            background-color: #222;
            color: #fff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin: 10px;
        }

        .circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            width: 100%;
        }

         /* Estilos anteriores omitidos para maior clareza */

        /* Estilos para o título */
        .title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        /* Estilos para o botão "Sair" */
        .btn-sair {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff5858;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-sair:hover {
            background-color: #ff4444;
        }

        @media screen and (max-width: 600px) {
            .card {
                padding: 10px;
                width: 100%;
            }

            .circle {
                width: 100px;
                height: 100px;
            }
        }
    </style>

</head>

<body>

<div class="title">Crianças Cadastradas no SCD</div>

<?php
include("config.php");

$resultado = mysqli_query($conn, "SELECT * FROM kids");

while ($row = mysqli_fetch_array($resultado)) {
    $Nome = $row['nome'];
    $Idade = $row['idade'];
    $Sexo = $row['sexo'];
    $Lugar = $row['lugar'];
    $Pais = $row['nome_pais'];
    $User = $row['nome_user'];
    $Imagem = $row['imagem'];

    // Exibe as informações em um formato visualmente apelativo
    echo "<div class='container'>";
    echo "<div class='card'>";
    echo "<div class='circle'>";
    echo "<img src='$Imagem' />";
    echo "</div>";
    echo "<div class='content'>";
    echo "<h2>$Nome</h2>";
    echo "<p>Idade: $Idade</p>";
    echo "<p>Sexo: $Sexo</p>";
    echo "<p>Lugar: $Lugar</p>";
    echo "<p>País: $Pais</p>";
    echo "<p>Usuário: $User</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>

<button class="btn-sair">Sair</button>


    <script src="js/main.js"></script>
    <script src="bootstrap/js/bootstrap"></script>
</body>
</html>
