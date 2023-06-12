<?php 
session_start();

include __DIR__ . '/router.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

rotear($uri, $rotas);

?>