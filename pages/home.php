<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/login">Login</a>
    <a href="/cadastro">Cadastro</a>

    <?php 
        if(isset($_SESSION['usuarios'])) { ?>
        <h2>Usuários Cadastrados:</h2>
        <ul>
            <?php foreach ($_SESSION['usuarios'] as $usuario): ?>
                <li><?=$usuario['nome']?> - <?=$usuario['email']?> - <?=$usuario['pwd']?> - <?=$usuario['tipo']?></li>
            <?php endforeach; ?>
        </ul>
    <?php } ?>
    <br>

    <h1>DEU CERTO, OBRIGADO MEU DEUS</h1>
</body>
</html>