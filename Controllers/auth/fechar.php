<?php 
    if(isset($_SESSION['user'])) {
        session_destroy();
        header('location: /');
    }
    else {
        echo("deu ruim");
    }
?>