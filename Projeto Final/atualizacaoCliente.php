<?php

    include('config/config.php');

    session_start();
    $id = $_SESSION['id_Cliente'];

    $nome = $_POST['nomeC'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $morada = $_POST['morada'];
    $codpostal = $_POST['codpostal'];
    $tlm = $_POST['tlm'];
 
    $query_inserir = "update clientes
    set nome_cliente = '".$nome."',password_cliente = '".$password."', 
    email_cliente = '".$email."',morada_cliente = '".$morada."',codPostal_cliente = '".$codpostal."',
    telemovel_cliente = '".$tlm."'
    where idCliente = ".$id;

    $resultaddo = mysqli_query($ligacao, $query_inserir);

    header('location:Index2.php?area=geralcliente'); 
?>
