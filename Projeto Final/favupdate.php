<?php

    include('config/config.php');
    session_start();

    if(isset($_SESSION['id_Cliente']))
    {
        $id_produto = $_GET['id'];
        $id_cliente = $_GET['idc'];

        $query = "update favoritos SET ativo = 0
        WHERE produtos_idProduto = $id_produto and clientes_idCliente = $id_cliente";

        mysqli_query($ligacao,$query);

        echo($query);

        header('location:Index.php?area=favorito');
    }
    else
    {
        header('location:Index2.php');
    }
?>