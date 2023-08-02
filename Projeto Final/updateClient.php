<?php

    include('config/config.php');
    session_start();

    $id_cliente = $_SESSION['idCliente'];

    $query = "update clientes SET ativo_cliente = 0
    WHERE idCliente = ".$id_cliente;

    mysqli_query($ligacao,$query);

    header('location:Index2.php?area=listacliente');

?>