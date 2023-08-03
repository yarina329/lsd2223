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

/*
    if($nome != '')
    {
        $query_inserir = "update clientes
    set nome_cliente = '".$nome."'
    where idCliente = ".$id;
    }
    if($email != '')
    {
        $query_inserir = "update clientes
    set email_cliente = '".$email."'
    where idCliente = ".$id;
    }
    if($password != '')
    {
        $query_inserir = "update clientes
    set password_cliente = '".$password."'
    where idCliente = ".$id;
    }
    if($morada != '')
    {
        $query_inserir = "update clientes
    set morada_cliente = '".$morada."'
    where idCliente = ".$id;
    }
    if($codpostal != '')
    {
        $query_inserir = "update clientes
    set codPostal_cliente = '".$codpostal."'
    where idCliente = ".$id;
    }
    if($tlm != '')
    {
        $query_inserir = "update clientes
    set telemovel_cliente = '".$tlm."'
    where idCliente = ".$id;
    }
    */
 
    $query_inserir = "update clientes
    set nome_cliente = '".$nome."',password_cliente = '".$password."', 
    email_cliente = '".$email."',morada_cliente = '".$morada."',codPostal_cliente = '".$codpostal."',
    telemovel_cliente = '".$tlm."'
    where idCliente = ".$id;

    $resultaddo = mysqli_query($ligacao, $query_inserir);

    header('location:Index2.php?area=geralcliente'); 
?>
