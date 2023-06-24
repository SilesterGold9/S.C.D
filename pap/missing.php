<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/form.css">

    <title>Nexus | Cadastrar kid</title>

    <style>
      input[type="file"] {
  display: none;
}

label[for="imagem"] {
  display: inline-block;
  padding: 10px;
  font-size: 16px;
  font-weight: bold;
  color: #333;
  background-color: #f5f5f5;
  border-radius: 55px;
  cursor: pointer;
}

label[for="imagem"]:hover {
  background-color: #ddd;
}

    </style>
</head>
<body>


<div class="container">

<div class="forms-container">

  <div class="signin-signup">

  <form enctype="multipart/form-data" action="miss.php" method="POST" class="sign-in-form">
  <h2 class="title">Quem Desapareceu?</h2>

  <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="text" name="nome" placeholder="Nome" />
  </div>


  <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="number" name="idade" placeholder="Quantos anos tem?" />
  </div>

  <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="text" name="sexo" placeholder="Sexo?" />
  </div>

  <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="text" name="lugar" placeholder="Onde achou ela?" />
  </div>

  <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="text" name="nome_pais" placeholder="Nome dos pais" />
  </div>

  <div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="text" name="nome_user" placeholder="Seu nome(usuario)" />
  </div>

   <!-- Adicione o campo de upload de imagem aqui -->
   <label for="imagem">Selecione uma imagem:</label>
<input type="file" name="imagem" id="imagem" accept="image/*">

  <input type="submit" value="Cadastrar" class="btn solid" />
      
</form>

    
    <form action="log.php" method="POST" class="sign-up-form">
      <h2 class="title">Cadastro</h2>

      <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="nome" placeholder="Username" />
      </div>

      <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" />
      </div>

      <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="celular" placeholder="Terminal" />
      </div>

      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="senha" placeholder="Password" />
      </div>

      <input type="submit" class="btn" value="Cadastrar" />
      <p class="social-text">Ou se cadastre com outras plataformas</p>
      <div class="social-media">
        <a href="#" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </form>
  </div>
</div>

<div class="panels-container">
  <div class="panel left-panel">
    <div class="content">
     
    </div>
    <img src="pics\undraw_code_review_re_woeb.svg" class="image" alt="" />
  </div>
  <div class="panel right-panel">
    <div class="content">
      <h3>Já é um de nós?</h3>
      <p>
        Entre e comece a explorar amigo(a) :-)
      </p>
      <button class="btn transparent" id="sign-in-btn">
        Login
      </button>
    </div>
    <img src="pics/register.svg" class="image" alt="" />
  </div>
</div>
</div>

<script src="js/app.js"></script>
</body>
</html>