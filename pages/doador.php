<?php 
  if(!isset($_SESSION['logado'])) {
    header('location: /');
    die();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="icon" href="/IMG/CHD.png">
  <title>Home</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-info" style="height: 100px;">
    <a class="navbar-brand mx-4" href="PaginaInicial.html"><img src="../IMG/CHD.png" alt="" style="width: 70px; height: 70px;"></a>
    <div class="mx-auto">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">ONGs Próximas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Veja Suas Doações</a>
        </li>
      </ul>
    </div>
    <div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-moon"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-user"></i></a>
        </li>
        <li class="nav-item">
          <span class="navbar-text text-white"><?=$_SESSION['logado']['nome']?></span>
        </li>
      </ul>
    </div>
  </nav>

  <div class="carousel slide" data-ride="carousel" style="height: 200px; position: relative;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="bg-danger d-block w-100" style="height: 200px;"></div>
        <div class="carousel-caption">
          <h3>Título do Slide 1</h3>
          <p>Descrição do Slide 1</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="bg-dark d-block w-100" style="height: 200px;"></div>
        <div class="carousel-caption">
          <h3>Título do Slide 2</h3>
          <p>Descrição do Slide 2</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="bg-success d-block w-100" style="height: 200px;"></div>
        <div class="carousel-caption">
          <h3>Título do Slide 3</h3>
          <p>Descrição do Slide 3</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <h2>Notícias</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4 bg-info text-white">
          <div class="bg-info" style="height: 150px;"></div>
          <div class="card-body">
            <h5 class="card-title">Título da Notícia 1</h5>
            <p class="card-text">Descrição da Notícia 1</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4 bg-info text-white">
          <div class="bg-info" style="height: 150px;"></div>
          <div class="card-body">
            <h5 class="card-title">Título da Notícia 2</h5>
            <p class="card-text">Descrição da Notícia 2</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bar bg-info text-white text-center py-3 mt-auto">
    <p>Informações e Contatos do Site</p>
    <p>Email: exemplo@example.com</p>
    <p>Telefone: (00) 1234-5678</p>
  </div>

</body>

</html>
