<?php

    include('config/config.php');

    $nome = $_POST['nome'];
    $telemovel = $_POST['tlm'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $morada = $_POST['morada'];
    $codigo = $_POST['codigop'];

    $query_inserir = "insert into clientes
    (nome_cliente, email_cliente, codPostal_cliente, morada_cliente, telemovel_cliente, 
    password_cliente, ativo_cliente, tipoclientes_idTipoCliente) 
    values
    ('".$nome."',
    '".$email."',
    '".$codigo."',
    '".$morada."',
    '".$telemovel."',
    '".$password."',
     1,
     2
     )";

    
    $resultaddo = mysqli_query($ligacao, $query_inserir);

    header('location:Index2.php');
?>
