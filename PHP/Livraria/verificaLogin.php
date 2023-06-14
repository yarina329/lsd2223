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
        //abrimos sessão -> para guardar os dados de registo do id
        session_start();
        $registo = mysqli_fetch_assoc($resultado);
        
        //guardamos nas variaveis os dados do cliente
        $user_id = $registo['id_cliente'];
        $user_nome = $registo['nome_cliente'];
        
        //criamos uma variavel de sessão 
        $_SESSION['id_do_cliente'] = $user_id;
        $_SESSION['nome_do_cliente'] = $user_nome;
        
        
        //header('location:index.php?area=lista-de-livros&login=ok');
        echo "Login Correcto";
    }
?>