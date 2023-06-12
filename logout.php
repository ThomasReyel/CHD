<?php 
    if(isset($_SESSION['logado'])){
        unset($_SESSION['logado']); //desloga o usuario
        header("location: /");
    } else {
        header("location: /");
    }
?>