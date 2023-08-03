<?php

    include('config/config.php');

    session_start();
    $idCliente = $_SESSION['id_Cliente'];

    $comentario = $_POST['produto'];

    $nome_do_ficheiro = uniqid().".jpg";
    $destino = "../imagens/Produtos".$nome_do_ficheiro;

    move_uploaded_file($origem, $destino);

    $query_inserir = "insert into comentarios
    (nome_produto, clientes_idCliente) values
    ('".$comentario."',
     ".$nomeSerie."
     )";

    
    $resultaddo = mysqli_query($ligacao, $query_inserir);

    header('location:Index2.php?area=geralcomentario&status=ok');
?>
