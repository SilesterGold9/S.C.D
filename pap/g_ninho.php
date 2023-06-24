<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criança Cadastrada</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #e0e5ec;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .card {
            width: 400px;
            background-color: #f3f5f8;
            border-radius: 20px;
            box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1), -10px -10px 30px rgba(255, 255, 255, 0.5);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 10px;
        }

        .card-info {
            margin-bottom: 10px;
        }

        .card-info span {
            font-weight: bold;
        }

        .card-info-value {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-content">
            <?php
            // Realizar a conexão com o banco de dados "nexus"
            $conn = mysqli_connect("localhost", "root", "", "scd");

            if ($conn) {
                // Consultar a última criança cadastrada na tabela
                $query = "SELECT * FROM ninho_kids ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $nome = $row['nome'];
                    $idade = $row['idade'];
                    $sexo = $row['sexo'];
                    $local = $row['lugar'];
                    $usuario = $row['nome_user'];
                    $dataCadastro = $row['data_cadastro'];

                    // Exibir a notificação na página
                    echo "<h1 class='card-title'>Criança cadastrada no Abrigo O Ninho</h1>";
                    echo "<div class='card-info'><span>Nome:</span><span class='card-info-value'>" . $nome . "</span></div>";
                    echo "<div class='card-info'><span>Idade:</span><span class='card-info-value'>" . $idade . "</span></div>";
                    echo "<div class='card-info'><span>Sexo:</span><span class='card-info-value'>" . $sexo . "</span></div>";
                    echo "<div class='card-info'><span>Local onde foi encontrada:</span><span class='card-info-value'>" . $local . "</span></div>";
                    echo "<div class='card-info'><span>Usuário que a encontrou:</span><span class='card-info-value'>" . $usuario . "</span></div>";
                    echo "<div class='card-info'><span>Data de Cadastro:</span><span class='card-info-value'>" . $dataCadastro . "</span></div>";
                } else {
                    echo "Nenhuma criança cadastrada recentemente.";
                }

                // Fechar a conexão com o banco de dados
                mysqli_close($conn);
            } else {
                echo "Erro na conexão com o banco de dados.";
            }
            ?>
        </div>
    </div>
</body>
</html>