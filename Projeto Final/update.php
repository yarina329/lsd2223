<?php

    include('config/config.php');
    session_start();

    $id_produto = $_GET['id'];

    echo($id_produto);

    $query = "update produtos SET ativo_produto = 0
    WHERE idProduto = ".$id_produto;

    mysqli_query($ligacao,$query);

    header('location:Index2.php?area=listaprodut');

?>