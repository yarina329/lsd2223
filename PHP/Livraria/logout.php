<?php
    /*

    //fecha as SESSION que são indicadas
    unset($_SESSION['id_do_cliente']);
    unset($_SESSION["name"]);
    header("Location:login.php");*/

    session_start();

    //destroi todas as SESSION que existem no site
    session_destroy();

    header('Location:index.php');
?>