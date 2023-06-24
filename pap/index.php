<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Nexus | Home</title>
    <style>
        /* Estilo personalizado para o carrossel */
        #carouselExampleIndicators .carousel-item img {
            max-height: 450px; /* Ajuste a altura máxima conforme necessário */
            object-fit: cover;
        }

        .neumorphic-carousel {
            background-color: #f3f3f3;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.1),
                        -10px -10px 20px rgba(255, 255, 255, 0.5);
            
        }

        .neumorphic-carousel img {
            border-radius: 10px;
        }

  
    </style>
</head>
<body>


<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h2>S. C. D</h2>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-active">Home</a></li>
        <li><a href="abrigos.php" class="nav-link px-2 link-dark">Abrigos</a></li>
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
    <div class="container ">
    <div class="alert alert-success mt-4 ">
        <p>As crianças da nossa província, Faça por elas.</p>
    </div>
</div>

    <div id="carouselExampleIndicators" class="carousel slide neumorphic-carousel" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        <!-- Adicione mais itens de acordo com a quantidade desejada -->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="pics\20230515_151055.jpg" class="d-block w-100" alt="Imagem 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Mingo</h5>
                <p>Encontrado no bairro da Lage</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="pics\20230515_145758.jpg" class="d-block w-100" alt="Imagem 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>João, Marta e Ana</h5>
                <p>Encontrados na entrada do Xyami Shoping</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="pics\20230515_145839.jpg" class="d-block w-100" alt="Imagem 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>João, Marta e Ana</h5>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="pics\20230515_145825.jpg" class="d-block w-100" alt="Imagem 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Crianças da nossa cidade</h5>
                <p>Faça por eles.</p>
            </div>
        </div>
        <!-- Adicione mais itens de acordo com a quantidade desejada -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </a>
</div>
    

    <div class="container px-4 pt-5 my-5 text-center border-bottom ">

    <h1 class="display-4 fw-bold"> <span class="text first-text">Sobre </span><span class="text sec-text"></span></h1>

    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">"Milhares de crianças em Angola e no mundo enfrentam a dura realidade do desabrigo. Sem um lar seguro e acolhedor, essas crianças são privadas de seus direitos básicos enfrentam um futuro incerto. Junte-se a nós na luta contra o desabrigo infantil e ajude a dar a essas crianças a chance de um futuro melhor. Cada ação conta, cada doação faz a diferença. Vamos trabalhar juntos para acabar com o desabrigo infantil e dar a essas crianças a oportunidade de um lar amoroso e uma vida digna."</p>
     
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="pics/banner3.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
    
  </div>

  <br>

        

  <br>

  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        O que esperar da nossa Plataforma?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Ajude crianças desabrigadas com a Plataforma SCD!

      A Plataforma SCD usa tecnologia inovadora para conectar crianças desabrigadas com abrigos da sua região de forma rápida e confiável.

      Com um design amigável e intuitivo, a plataforma facilita o cadastro e acolhimento das crianças, dando a elas um futuro melhor. 

      Nossa equipe trabalha duro para garantir segurança e eficiência, utilizando as melhores práticas de proteção de dados.

      A plataforma promove a colaboração entre abrigos, ONGs e voluntários, facilitando a comunicação e coordenação de esforços. 

      Oferecemos recursos para monitorar o progresso das crianças realocadas e garantir que recebam o apoio necessário.

      Estamos sempre buscando novas maneiras de melhorar nossos processos e atender às demandas crescentes, implementando novas tecnologias e treinando nossa equipe.

      Ao utilizar a Plataforma SCD, você pode ajudar a fazer a diferença na vida dessas crianças, dando-lhes um futuro melhor!

      Venha conosco nessa missão humanitária e use a tecnologia para o bem.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Quem serão os beneficiados?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      A Plataforma SCD tem como objetivo ajudar crianças desabrigadas a encontrar abrigos disponíveis na região de forma rápida e confiável. Com um design amigável e intuitivo, a plataforma facilita o cadastro e acolhimento das crianças, promovendo a colaboração entre abrigos, ONGs e voluntários. Nossa equipe trabalha duro para garantir segurança e eficiência, utilizando as melhores práticas de proteção de dados. Ao utilizar a Plataforma SCD, você pode ajudar a fazer a diferença na vida dessas crianças, dando-lhes um futuro melhor!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Como posso ajudar?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       Tudo o que você precisa fazer para ajudar não só a nós, mas como a sociedade em geral, é se preocupando em fazer o bem por aqueles menos favorecidos e desafortunados, ao utilozar a nossa plataforma você já estará fazendo muita coisa porque uma criança a menos sofrendo nas ruas é algo para se celebrar.
      </div>
    </div>
  </div>
</div>
  
<br>


<footer class="bg-dark text-light">
  <div class="container">
    <div class="row">
      <br>
      <div class="col-md-4">
        <br>
        <h5>About SCD</h5>
        <p>o projeto SCD se dedica a ajudar os membros mais vulneraveis da nossa sociedade, as crianças. Tire um tempo para as crianças da nossa cidade ;-) </p>
      </div>
      <div class="col-md-4">
        <br>
        <h5>Entre em contacto conosco</h5>
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


</body>

<script src="js/main.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</html>