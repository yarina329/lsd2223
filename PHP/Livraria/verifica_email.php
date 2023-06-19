<?php
    //echo "Ola! Entrei no php";

    include('config.php');

    $email_a_pesquisar = $_POST['email'];

    //echo "O email recebido foi o ".$email_a_pesquisar;

    $query = "select * from clientes where email_cliente = '".$email_a_pesquisar."'";
    

    // faz com que o codigo execute ate aqui
    //die();

    $resultado = mysqli_query($ligacao, $query);

    $num_resultado =$resultado->num_rows;

    if($num_resultado==0)
    {
        echo 'Ok';
    }
    else{
        echo 'Já existe';
    }
?>