<?php

    include('config/config.php');
    session_start();

    $id_cliente = $_GET['id'];

    $query = "update clientes SET ativo_cliente = 1
    WHERE idCliente = ".$id_cliente;

    mysqli_query($ligacao,$query);

    header('location:Index2.php?area=listacliente');

?>