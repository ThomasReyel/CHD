<?php 
$rotas = [
    '/' => '/pages/home.php',
    '/login' => '/pages/login.php',
    '/cadastro' => '/pages/cadastro.html',
    '/cadastrar' => '/cadastrar.php',
    '/logar' => '/logar.php',
    '/doador' => '/pages/doador.php',
    '/ong' => '/pages/ong.php',
    '/logout' => '/logout.php',
    '/delete' => '/delete.php'
];

function rotear($uri, $rotas) {
    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        echo "$uri é uma página inexistente";
    }
}
?>