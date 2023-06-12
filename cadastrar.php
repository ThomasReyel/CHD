<?php
if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['pwd'])){
    if(isset($_POST['ong']) || isset($_POST['doador'])) {
        $nome = $_POST['usuario'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        if(isset($_POST['ong'])) {
            $tipo = 1;
        } else if (isset($_POST['doador'])) {
            $tipo = 2;
        }
    
        $usuario = array(
            'nome' => $nome,
            'email' => $email,
            'pwd' => $pwd,
            'tipo' => $tipo
        );
    
        $_SESSION['usuarios'][] = $usuario;
        header('location: /');
        die(); 
    } else {
        header('location: /cadastro');
    }
} else {
    // echo "<script>alert('Deu merda')</script>";
    header('location: /cadastro');
    die();
} 
?>