<?php 
    $user = new Admin();

    $user -> ApagarDoador($_POST['id']);

    header('location: /admin')
?>