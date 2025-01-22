<?php
  // aplicação da função hasUser() definida em auth.php
  if (!hasUser()) {
    header('Location: /');
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
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ca5dba5f80.js" crossorigin="anonymous"></script>
  <link rel="icon" href="IMG/CHD.png">
  <title>Home</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-info px-5" style="height: 100px;">
    <a class="navbar-brand mx-4" href="/doador"><img src="../IMG/CHD.png" alt="" style="width: 70px; height: 70px;"></a>
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
          <span class="navbar-text text-white"><?= $_SESSION['user']?></span>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/fechar"> <i class="fa-solid fa-right-from-bracket"></i> </a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../IMG/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../IMG/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item"> 
        <img src="../IMG/3.png" class="d-block w-100" alt="...">
      </div>
    </div> 
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-4">
    <h2>Notícias</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4 bg-info text-white">
          <div class="bg-info" style="height: 150px;"></div>
          <div class="card-body">
            <h5 class="card-title">Título da Notícia 1</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis delectus nam repellat animi mollitia? Enim necessitatibus facilis, dolore iusto adipisci atque quos optio suscipit excepturi quaerat cum quasi officia nulla!</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4 bg-info text-white">
          <div class="bg-info" style="height: 150px;"></div>
          <div class="card-body">
            <h5 class="card-title">Título da Notícia 2</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis delectus nam repellat animi mollitia? Enim necessitatibus facilis, dolore iusto adipisci atque quos optio suscipit excepturi quaerat cum quasi officia nulla!</p>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>