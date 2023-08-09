<?php

    include('config/config.php');
    session_start();

    $idProduto = $_SESSION['idproduto'];
    $idCliente = $_SESSION['id_Cliente'];
    
    $queryfavorito = "insert into favoritos
    (ativo, produtos_idProduto, clientes_idCliente)
    values
    (1,
    ".$idProduto.",
    ".$idCliente."
    )";

    mysqli_query($ligacao,$queryfavorito);

    header('location:Index.php?area=favorito ');

?>