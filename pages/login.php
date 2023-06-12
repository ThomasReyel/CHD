<?php 
    //Se o usuário estiver logado, ele nn conseguirá acessar essa página
    if(isset($_SESSION['logado'])) { 
        header('location: /');
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-k9uNNp87VYw/7Gb4mGjX2WXz0P+4P1zq/VLCM0d3eO15H4ym3KeXZ9Wn7MvPZmqlgJen4qr2zOyZt31REZk1yA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="/IMG/CHD.png">
    <title>Pagina Inical</title>
</head>
<body class="bg-body-secondary">
    <div class="container-fluid">
        <div class="row bg-primary d-flex" style="min-height: 81vh;">
            <div class="bg-body-secondary d-flex align-items-center justify-content-center col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="w-75">
                    <h2><b class="text-info" style="font-size: 50px;">CHD</b></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum eveniet perferendis, error dolores a debitis facere incidunt impedit sint asperiores corrupti perspiciatis molestiae dignissimos voluptates tempore possimus facilis enim delectus.</p>
                </div>
            </div>
            <div class="bg-body-secondary d-flex align-items-center justify-content-center col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="bg-info-subtle rounded-4 p-4 col-lg-6 col-md-8 col-sm-10 col-12">
                    <form action="/logar" method="POST">
                        <div class="mb-4">
                          <input type="email" class="form-control" placeholder="EMAIL" id="username" name="email">
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control" placeholder="SENHA" id="password" name="pwd">
                        </div>
                        <div class="mb-4">
                          <button type="submit" class="btn btn-info text-white" name="submit"><b>ENTRAR</b></button>
                        </div>
                    </form>
                    <div class="mb-4">
                        <a href="/cadastro" class="text-decoration-none">Não tem cadastro? Cadastrar</a>
                    </div>
                    <div class="mb-4">
                        <a href="" class="text-decoration-none">Esqueceu a senha?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar bg-info text-white text-center py-1 w-100 fixed-bottom">
        <p>Informações e Contatos do Site</p>
        <p>Email: exemplo@example.com</p>
        <p>Telefone: (00) 1234-5678</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
