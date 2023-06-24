<?php
include('config.php');

$sql = "SELECT * FROM abrigos";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/ab.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Nexus | Abrigos</title>


</head>
<body>


<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h2>S. C. D</h2>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="abrigos.php" class="nav-link px-2 link-active">Abrigos</a></li>
        <li><a href="info.php" class="nav-link px-2 link-dark">Informações</a></li>
        <li><a href="cad.php" class="nav-link px-2 link-dark">Crianças Desaparecidas</a></li>
        <li><a href="index.html" id="out" class="nav-link px-2 link-danger">SAIR</a></li>
    
      </ul>

      <div class="col-md-3 text-end">
        
        <a href="kids.php">
        <button type="button" class="btn btn-primary">Cadastrar(Criança)</button>
        </a>
      </div>
    </header>

<section>
    <h1>Perfis de Abrigos</h1>

    <div class="company">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="company-card">
                <a class="hui" href="abrigo.php?id=<?php echo $row['id']; ?>">
                    <img src="pics/Shed-pana.svg" alt="Logo do abrigo <?php echo $row['nome']; ?>">
                    <h2><?php echo $row['nome']; ?></h2>
                    <p>Funcionários: <?php echo $row['funcionarios']; ?></p>
                    <p>Condições atuais: <?php echo $row['estado']; ?></p>
                    <p>Localização: <?php echo $row['gps']; ?></p>
                </a>
            </div>
        <?php } ?>
    </div>
</section>

<section>
  

    <div class="company">
        <div class="company-card">
            <a class="hui" href="abrigos\jasper.html">
                <img src="pics/Shed-pana.svg" alt="Logo do abrigo">
                <h2>Abrigo SOS</h2>
                <p>Funcionários: 34</p>
                <p>Condições atuais: Boas</p>
                <p>Localização: Lubango / Ngola</p>
            </a>
        </div>

        <div class="company-card">
            <a class="hui" href="abrigos\ninho.html">
                <img src="pics/Shed-pana.svg" alt="Logo do abrigo">
                <h2>Abrigo O Ninho</h2>
                <p>Funcionários: 123</p>
                <p>Condições atuais: Muito Boas</p>
                <p>Localização: Lubango / Tchioco</p>
            </a>
        </div>

        <div class="company-card">
            <a class="hui" href="abrigos\casa.html">
                <img src="pics/Shed-pana.svg" alt="Logo do abrigo">
                <h2>Abrigo Casa Mãe</h2>
                <p>Funcionários: 73</p>
                <p>Condições atuais: Muito Boas</p>
                <p>Localização: Lubango / Ngola</p>
            </a>
        </div>
    </div>
</section>

<footer class="bg-dark text-light">
  <div class="container">
    <div class="row">
      <br>
      <div class="col-md-4">
        <br>
        <h5>Sobre SCD</h5>
        <p>O projeto SCD se dedica a ajudar os membros mais vulneráveis da nossa sociedade, as crianças. Tire um tempo para as crianças da nossa cidade ;-) </p>
      </div>
      <div class="col-md-4">
        <br>
        <h5>Entre em contato conosco</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-map-marker-alt"></i> XXX Bairro Deolinda Rodrigues, Lubango, Angola 12345</li>
          <li><i class="fas fa-phone"></i> (244) 926 666 555</li>
          <li><i class="fas fa-envelope"></i> info@scdproject.org</li>
        </ul>
      </div>
      <div class="col-md-4">
        <br>
        <h5>Siga-nos</h5>
        <ul class="list-unstyled">
          <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
          <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
          <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
        </ul>
      </div>
    </div>
    <hr class="bg-light">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2023 SCD Project. Todos os direitos reservados.</p>
      </div>
    </div>
  </div>
</footer>

<script src="js/main.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>