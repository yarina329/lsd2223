<?php

    include('config/config.php');

    $idComentario = $_GET['id'];

    $query_inserir = "delete from comentarios
    WHERE idComentario = $idComentario";
    
    $resultaddo = mysqli_query($ligacao, $query_inserir);

    header('location:Index2.php?area=gerallistacomentario');
?>
