<?php
    include('config/config.php');

    session_start();
    $idProduto = $_SESSION['id_Produto'];
    $idCliente = $_SESSION['id_Cliente'];
    
    $queryinserir = "insert into carrinhos
    (fk_idProduto, fk_idCliente)
    values
    (".$idProduto.",".$idCliente.")";

    echo ($queryinserir);
    die();
    mysqli_query($ligacao,$queryinserir);
    //header('location:Index.php?area=carrinho&status=ok');
?>