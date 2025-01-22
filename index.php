<?php 
session_start();
include __DIR__ . '/auth.php';
include __DIR__ . '/Models/usuario.php';
include __DIR__ . '/Models/ong.php';
include __DIR__ . '/Models/admin.php';
include __DIR__ . '/route.php';
include __DIR__ . '/web.php';
include __DIR__ . '/app.php';

App::run();

?>