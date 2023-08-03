<?php

    include('config/config.php');
    session_start();

    $id_carrinho = $_GET['id'];

    $query = "update carrinhos SET ativo = 0
    WHERE idCarrinho = ".$id_carrinho;

    mysqli_query($ligacao,$query);

    header('location:Index2.php?area=listacarrinho');

?>