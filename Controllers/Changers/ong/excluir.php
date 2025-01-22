<?php 
    $user = new Admin();

    $user -> ApagarOng($_POST['id']);

    header('location: /admin')
?>