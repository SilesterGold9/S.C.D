<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Nexus | Crianças</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .search-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-container input[type="text"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 400px;
            font-size: 16px;
        }

        .search-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #0069d9;
        }

        .table {
            background-color: #fff;
        }

        th {
            background-color: #007bff;
            color: #222;
        }
    </style>
</head>

<body>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h2>S. C. D</h2>
    </a>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="abrigos.php" class="nav-link px-2 link-dark">Abrigos</a></li>
        <li><a href="info.php" class="nav-link px-2 link-dark">Informações</a></li>
        <li><a href="cad.php" class="nav-link px-2 link-active">Crianças Desaparecidas</a></li>
        <li><a href="index.html" id="out" class="nav-link px-2 link-danger">SAIR</a></li>
    </ul>
    <div class="col-md-3 text-end">
        <a href="kids.php">
            <button type="button" class="btn btn-primary">Cadastrar (Criança)</button>
        </a>
    </div>
</header>

<div class="search-container">
    <form method="GET" action="">
        <input type="text" placeholder="Pesquisar crianças desaparecidas..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<div class="container col-xxl-8 px-4 py-5">
    <h1 class="display-5 fw-bold lh-1 mb-3">Crianças Desaparecidas</h1>
    <?php
    include('config.php');

    // Verifica se foi enviada uma pesquisa
    if (isset($_GET['search'])) {
        // Remove caracteres especiais da pesquisa
        $search = preg_replace("#[^0-9a-z]#i", "", $_GET['search']);

        // Consulta SQL para selecionar as crianças que contêm a pesquisa no nome
        $sql = "SELECT * FROM desaparecidos WHERE nome LIKE '%$search%'";
    } else {
        // Consulta SQL para selecionar todas as crianças
        $sql = "SELECT * FROM desaparecidos";
    }

    $result = mysqli_query($conn, $sql);

    echo '
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Sexo</th>
        <th>Local</th>
      </tr>
    </thead>
    <tbody>
';

    // Loop para imprimir as crianças na tabela
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
    <tr>
      <td>' . $row['nome'] . '</td>
      <td>' . $row['idade'] . '</td>
      <td>' . $row['sexo'] . '</td>
      <td>' . $row['lugar'] . '</td>
    </tr>
  ';
    }

    echo '
    </tbody>
  </table>
';
    ?>

    <script src="js/main.js"></script>
    <script src="bootstrap/js/bootstrap"></script>
</div>
</body>
</html>
