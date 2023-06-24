<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crianças Cadastradas</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      width: 300px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .circle {
      width: 100%;
      height: 150px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f2f2f2;
    }

    .circle img {
      max-width: 100%;
      max-height: 100%;
      object-fit: cover;
      border-radius: 50%;
    }

    .content {
      padding: 20px;
    }

    .content h2 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .content p {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <?php
    include("config.php");

    $resultado = mysqli_query($conn, "SELECT * FROM kids");

    echo "<div class='container'>";

    while ($row = mysqli_fetch_array($resultado)) {
      $Nome = $row['nome'];
      $Idade = $row['idade'];
      $Sexo = $row['sexo'];
      $Lugar = $row['lugar'];
      $Pais = $row['nome_pais'];
      $User = $row['nome_user'];
      $Imagem = $row['imagem'];

      // Exibe as informações em um formato visualmente apelativo
      echo "<div class='card'>";
      echo "<div class='circle'>";
      echo "<img src='./$Imagem' alt='Imagem da criança' />";
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
    }

    echo "</div>";
  ?>
</body>
</html>