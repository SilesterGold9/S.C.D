<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("conexao.php");

        $adm  = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = 'index.html'</script>";
    }

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $query = $conexao->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();

        $usuario = $query->fetch(PDO::FETCH_ASSOC);
    }else{
        echo "<script>window.location = 'dashboard.php'</script>";
    }

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $adm = $_POST["adm"];
        $celular = $_POST["celular"];

        $query = $conexao->prepare("UPDATE users SET nome = :nome, email = :email, adm = :adm, celular = :celular WHERE id = :id");
        $query->bindParam(":nome", $nome);
        $query->bindParam(":email", $email);
        $query->bindParam(":adm", $adm);
        $query->bindParam(":celular", $celular);
        $query->bindParam(":id", $id);

        if($query->execute()){
            echo "<script>alert('Usuário atualizado com sucesso!'); window.location = 'dashboard.php'</script>";
        }else{
            echo "<script>alert('Erro ao atualizar usuário.');</script>";
        }
    }
?>

<html>
    <head>
        <title>Editar usuário - <?php echo $nome; ?></title>
        <link rel="stylesheet" href="css/adm.css">
        <style>
body {
  background-color: #f2f2f2;
}

form {
  background-color: #e6e6e6;
  box-shadow: 8px 8px 16px #c9c9c9, -8px -8px 16px #ffffff;
  border-radius: 16px;
  padding: 20px;
  max-width: 500px;
  margin: 50px auto;
}

form h2 {
  text-align: center;
  font-size: 36px;
  font-weight: 600;
  margin-bottom: 30px;
}

form label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 500;
}

form input[type="text"], 
form input[type="email"],
form input[type="password"],
form select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: none;
  background-color: #f2f2f2;
  margin-bottom: 20px;
  border-radius: 8px;
}

form input[type="submit"] {
  background-color: #2980b9;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 18px;
  font-weight: 500;
  border-radius: 8px;
  transition: background-color 0.2s ease-in-out;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #1c4f6e;
}

form input[type="submit"]:focus {
  outline: none;
}

form .form-error {
  color: #ff0000;
  margin-bottom: 10px;
  font-size: 16px;
}

.form-success {
  color: #008000;
  margin-bottom: 10px;
  font-size: 16px;
}

@media screen and (max-width: 600px) {
  form {
    margin: 20px;
  }
}


        </style>
    </head>
    <body>
        <?php if($adm): ?>
            <header id="above">
                <h1>Editar usuário - <?php echo $usuario["nome"]; ?></h1>
            </header>

            <form method="POST" class="edit-form">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $usuario["nome"]; ?>">
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="<?php echo $usuario["email"]; ?>">
                </div>
                <div>
                    <label for="adm">ADM:</label>
                    <select id="adm" name="adm">
                        <option value="0" <?php echo $usuario["adm"] == 0 ? "selected" : ""; ?>>Não</option>
                        <option value="1" <?php echo $usuario["adm"] == 1 ? "selected" : ""; ?>>Sim</option>
                    </select>
                </div>
                <div>
                    <label for="celular">Celular:</label>
                    <input type="text" id="celular" name="celular" value="<?php echo $usuario["celular"]; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-edit">Salvar</button>
            </form>
        <?php endif; ?>

        <br>
        <a id="huh" class="btn btn-delete" href="logout.php">Sair</a>
    </body>
</html>
