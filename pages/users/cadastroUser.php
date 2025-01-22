
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="icon" href="/IMG/CHD.png">
        <title>Login</title>
    </head>
<body class=" bg-secondary-subtle">
    <!--
         Cabeçalho-->
    <div class="container-fluid">
        <div class="row" style="background-color: #3a8dd5;">
                <div class="col-12 col-xl-6">
                    <div class="row p-3">
                        <div class="col-2 col-xl-2">
                            <img src="/IMG/CHD.png" href="Index.html" style="width: 150px;" class="p-3">
                        </div>
                        <div class="col-10 col-xl-8 my-xl-2 mx-xl-1">
                            <a href="/" class="text-decoration-none"><h1 class="mx-3 text-white pt-3 d-flex d-xl-block justify-content-end"> Rede de Apoio</h1></a>
                            <h3 class="mx-3 text-white d-flex d-xl-block justify-content-center"> Conexões Humanitária de Dulce</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 offset-xl-1 col-xl-5">

                    <div class="row d-flex text-end"><!-- opções -->
                        <div class="col-12 d-xl-inline d-none fw-normal fs-0 mt-3">
                            <a href="/login" class="m-1 text-white">Login |Cadastro</a>
                            <a href="#" class="m-1 text-white">Contatos</a>
                            <a href="#" class="m-1 text-white">Sobre nós</a>
                            <a href="#" class="m-1 text-white">Como Ajudar</a>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center mt-4 justify-content-xl-end"><!-- Barra de pesquisa -->
                        <div class="col-xl-8 col-md-8 col-10">
                            <div class="input-group mb-3 mt-2">
                                <input type="search" class="form-control" placeholder="Pesquise aqui"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn bg-primary-subtle" type="button" id="button-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <!--
         Login/Cadastro -->

   <div class="container-fluid py-5 bg-body-secondary" >
    <div class="row justify-content-center" >
        <!--
             Create -->
        <div class="col-7 mb-5 p-4 rounded-4 bg-primary-subtle">

            <form action="/cadastrarUser" class="row g-3" method="post">
                
                <div class="col-8">
                    <label for="inputAddress" class="form-label">Nome completo</label>
                    <input name="nome" type="text" class="form-control" id="inputAddress" placeholder="">
                </div>
                <div class="col-4">
                    <label for="inputAddress" class="form-label">CPF</label>
                    <input name="CPF" type="text" class="form-control" id="inputAddress" placeholder="XXX.XXX.XXX-XX">
                </div>
                <div class="col-7">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-5">
                    <label for="inputPassword4" class="form-label">Senha</label>
                    <input name="password" type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-8">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <input name="end" type="text" class="form-control" id="inputAddress" placeholder="Rua, N">
                </div>
                <div class="col-4">
                    <label for="inputAddress" class="form-label">Bairro</label>
                    <input name="bairro" type="text" class="form-control" id="inputAddress">
                </div>
                <div class="col-5">
                    <label for="validationCustom01" class="form-label">Cidade</label>
                    <input name="cidade" type="text" class="form-control" id="validationCustom01" required>
                </div>
                <div class="col-3">
                    <label for="validationCustom02" class="form-label">Estado</label>
                    <input name="estado" type="text" class="form-control" id="validationCustom02" required>
                </div>
                <div class="col-4">
                    <label for="validationCustom02" class="form-label">CEP</label>
                    <input name="CEP" type="text" class="form-control" id="validationCustom02" placeholder="00000-000" required>
                </div>
                <div class="col-4">
                    <label for="validationCustom02" class="form-label">Numero</label>
                    <input name="Numero" type="text" class="form-control" id="validationCustom02" placeholder="Numero da Casa" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    Declarto que li e concordo com os <a href="/termos">termos de segurança e serviço.</a>
                    </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>

<!-- 
     Rodapé -->
     <div class="content text-center" style="background-color: #3a8dd5;">
        <div class="row py-4">
            <h3>
                <span class="m-4 fw-bolder text-white">ACOMPANHE A CHD NAS REDES SOCIAIS </span>
                <a href="#"><i class="fa-brands fa-instagram fs-2 m-1 text-white"></i></a>
                <a href="#"><i class="fa-brands fa-square-facebook fs-2 m-1 text-white"></i></a>
                <a href="#"><i class="fa-brands fa-twitter fs-2 m-1 text-white"></i></a>
                <a href="#"><i class="fa-brands fa-youtube fs-2 m-1 text-white"></i></a>
                <hr class="border border-white border-3 opacity-100 btn-group-vertical w-75">
            </h3>
        </div>
    </div>

    <!--
         END -->
    <script src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/ca5dba5f80.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>