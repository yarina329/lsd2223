
<?php
    include('config/config.php');

    $user = $_POST['emailL'];
    $pwd = $_POST['passwordL'];

    $query = "select * from clientes 
    inner join tipoClientes on fk_idTipo = idTipoCliente
    where email_cliente = '$user'
    and password_cliente = '$pwd'";

    $resultado = mysqli_query($ligacao,$query);

    //$TipoCliente = mysqli_fetch_assoc($resultado);
    
    $registo = mysqli_fetch_assoc($resultado);
    //$idTipoCliente = $TipoCliente['fk_idTipo'];

    $numero_de_users_encontrados = $resultado->num_rows;

    if($numero_de_users_encontrados == 1 && $registo['fk_idTipo'] == 1)
    {
    
        session_start();
        
        $user = $registo['idCliente'];
        $email = $registo['email_cliente'];
        
        $_SESSION['id_Cliente'] = $user;
        $_SESSION['emailCliente'] = $email;

        header('location:Index.php');
    }
    else if($numero_de_users_encontrados == 1 && $idTipoCliente == 2)
    {
        header('location:/Index.php?area=lista-de-livros&login=ok');
    }
    else if($numero_de_users_encontrados != 1)
    {
        header('location:Index2.php?login=erro');
    }
?>