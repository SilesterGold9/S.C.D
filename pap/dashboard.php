<?php
session_start();

if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
    require("conexao.php");

    $adm = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
} else {
    echo "<script>window.location = 'index.html'</script>";
}

$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = $conexao->prepare("SELECT * FROM users WHERE nome LIKE :search OR email LIKE :search ORDER BY id");
$query->bindValue(':search', '%' . $search . '%');
$query->execute();

$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head>
    <title>Dashboard - <?php echo $nome; ?></title>
    <link rel="stylesheet" href="css/adm.css">
    <style>
    </style>
    <script src="https://kit.fontawesome.com/3667a072ec.js" crossorigin="anonymous"></script>
</head>
<body>
<?php if ($adm): ?>
    <header id="above">
        <h1>Bem-vindo(a) ADM - <?php echo $nome; ?>.</h1>
        <?php
        $query = $conexao->prepare("SELECT COUNT(*) FROM users");
        $query->execute();
        $numUsuarios = $query->fetchColumn();
        ?>
        <div id="contador">
            <span>Total de usuários cadastrados:</span>
            <span><?php echo $numUsuarios; ?></span>
        </div>
    </header>

    <a href="cab.php" class="btn">Cadastrar Abrigo</a>

    <div class="search-container">
        <form action="search.php" method="GET">
            <input type="text" placeholder="Pesquisar..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <br>

    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>ADM</th>
            <th>Terminal</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($users as $usuarioAtual):
            ?>
            <tr>
                <td><?php echo $usuarioAtual["id"]; ?></td>
                <td><?php echo $usuarioAtual["nome"]; ?></td>
                <td><?php echo $usuarioAtual["email"]; ?></td>
                <td><?php echo $usuarioAtual["adm"]; ?></td>
                <td><?php echo $usuarioAtual["celular"]; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $usuarioAtual['id']; ?>">
                        <button type="button" class="btn btn-delete">Deletar</button>
                    </a>
                    <a href="block.php?id=<?php echo $usuarioAtual['id']; ?>">
                        <button type="button" class="btn btn-block">Bloquear</button>
                    </a>
                    <a href="edit.php?id=<?php echo $usuarioAtual['id']; ?>">
                        <button type="button" class="btn btn-edit">Editar</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<br>
<a id="huh" class="btn btn-delete" href="logout.php">Sair</a>
</body>
</html>
