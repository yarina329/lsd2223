<?php
    include('config.php');

    //echo "entrei no login";

    $user = $_POST['email_login'];
    $pass = $_POST['pass_login'];

    $query = "select * from clientes 
    where email_cliente = '$user'
    and password_cliente = '$pass'";

    $resultado = mysqli_query($ligacao,$query);

    $numero_de_users_encontrados = $resultado->num_rows;

    //echo "Foram encontrados " . $numero_de_users_encontrados;

    if($numero_de_users_encontrados != 1)
    {
        header('location:index.php?login=erro');
    }
    else
    {
        echo "Login Correcto";
    }
?>