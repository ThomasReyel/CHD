<?php 
    if(isset($_SESSION['usuarios'])) {
        session_destroy();
        header('location: /');
    }
?>