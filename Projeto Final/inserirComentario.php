<?php

    include('config/config.php');

    session_start();
    $idCliente = $_SESSION['id_Cliente'];

    $comentario = $_POST['comentario'];

    $foto = $_FILES['foto'];

    print_r($foto);
    $origem = $foto['tmp_name'];

    $nome_do_ficheiro = uniqid().".jpg";
    $destino = "imagens/Foto-comentario/".$nome_do_ficheiro;

    move_uploaded_file($origem, $destino);

    $query_inserir = "insert into comentarios
    (foto, comentario, clientes_idCliente) values
    ('".$nome_do_ficheiro."',
    '".$comentario."',
     ".$idCliente."
     )";

    
    $resultaddo = mysqli_query($ligacao, $query_inserir);

    header('location:Index2.php?area=geralcomentario&status=ok');
?>
