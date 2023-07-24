<?php
    include('config.php');

    $idProduto = $_POST['idProduto'];
    $idCliente = $_POST['idCliente'];
    $quantidade = $_POST['quantidade'];

    $query_de_registo = "insert into clientes
    (idProduto, idCliente, quantidade)
    values
    ('".$idProduto."',
    '".$idCliente."',
    '".$quantidade."')";

    mysqli_query($ligacao,$query_de_registo);
    
    //echo $query_de_registo;

    header('location:DetalhesProduto.php?status=ok');
?>