<?php
    require_once('./Models/ong.php');
    require_once('./Models/usuario.php');

    /* SE OUVER UM USUARIO NA SEÇAO, ELE SERÁ REDIRECIONADO AO SEU DASHBOARD */
    if (isset($_SESSION['tipo'])) {
        if (hasUser()) {
            if ($_SESSION['tipo'] == 1) {
                header("Location: /doador");
            } else if ($_SESSION['tipo'] == 2) {
                header('location: /ong');
            } 
        }
    } 

    if (isset($_POST['email'], $_POST['password'], $_POST['tipo'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $tipo = $_POST['tipo'];

        if ($tipo == '1') {
            
            $user = new Usuario();
            $result = $user->BuscarDoador($email); 
            
            /* busca */
            if ($email == $result['doa_email'] && password_verify($password, $result['doa_senha'])) {
                $_SESSION['user'] = $result['doa_nome'];
                $_SESSION['tipo'] = '1';
                $_SESSION['autorizacao'] = '';
                header('location: /doador');
            } else {
                header('Location: /login');
            }
           
        } else if ($tipo == '2') {
            $ong = new ONG();

            $result = $ong->BuscarOng($email);
            /* busca */
            if ($email == $result['ong_email'] && password_verify($password, $result['ong_senha'])) {
                $_SESSION['user'] = $result['ong_nome'];
                $_SESSION['tipo'] = '2';
                $_SESSION['autorizacao'] = '';
                header('location: /ong');
            }else {
                header('Location: /login');
            }    
        } else {
            header('Location: /login');
        }

    } else {
        header('Location: /login');
    }

?>