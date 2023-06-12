<?php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
    foreach ($_SESSION['usuarios'] as $usuario => $value) {
        $nome = $value['nome'];
        $email = $value['email'];
        $pwd = $value['pwd'];
        $tipo = $value['tipo'];

        if($_POST['email'] == $email && $_POST['pwd'] == $pwd) {
            $usuarioLogado = array (
                'nome' => $nome,
                'email' => $email,
                'pwd' => $pwd,
                'tipo' => $tipo
            );
            $_SESSION['logado'] = $usuarioLogado;
        
            if ($_SESSION['logado']['tipo'] == 1) {
                header('location: /ong');
            } else if ($_SESSION['logado']['tipo'] == 2) {
                header('location: /doador');
            }
        }
    } 
    if(!isset($_SESSION['logado'])) {
        header('location: /login');
    }
} else {
    header('location: /login');
}
?>