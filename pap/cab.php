<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Abrigos</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      background-color: #F4F4F4;
    }

    h1 {
      text-align: center;
      margin: 20px 0;
      color: #333;
    }

    form {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      padding: 20px;
      width: 90%;
      max-width: 500px;
      margin: 0 auto;
    }

    label {
      display: block;
      font-size: 16px;
      font-weight: bold;
      color: #555;
      margin-bottom: 5px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      background-color: #f2f2f2;
      margin-bottom: 20px;
      color: #333;
    }
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      background-color: #f2f2f2;
      margin-bottom: 20px;
      color: #333;
    }

    input[type="submit"] {
      background-color: #1E90FF;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
      background-color: #0066CC;
    }

    @media screen and (max-width: 768px) {
      form {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <h1>Cadastro de Abrigos</h1>
  <form action="ab.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="estado">Estado:</label>

<select id="estado" name="estado" required>
  <option value="">Como estão as Condições do Abrigo?</option>
  <option value="Más">Más</option>
  <option value="Boas">Boas</option>
  <option value="Muito boas">Muito boas</option>
  <option value="Excelentes">Excelentes</option>
</select>

<label for="localizacao">Localização:</label>
<input type="text" id="localizacao" name="gps" required>

<label for="funcionarios">Número de funcionários:</label>
<input type="number" id="funcionarios" name="funcionarios" required>

<input type="submit" value="Cadastrar">
</form>
</body>

</html>
