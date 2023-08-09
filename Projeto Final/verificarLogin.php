
<?php
    include('config/config.php');

    $user = $_POST['emailL'];
    $pwd = $_POST['passwordL'];

    echo ($user.$pwd);
    $query = "select * from clientes 
    inner join tipoclientes on tipoclientes_idTipoCliente = idTipoCliente
    where email_cliente = '$user'
    and password_cliente = '$pwd'";

    $resultado = mysqli_query($ligacao,$query);

    
    $registo = mysqli_fetch_assoc($resultado);

    $numero_de_users_encontrados = $resultado->num_rows;
    echo ($numero_de_users_encontrados);
    $ativo = $registo['ativo_cliente'];

    if($numero_de_users_encontrados == 1 && $registo['tipoclientes_idTipoCliente'] == 1 && $ativo == 1)
    {
        session_start();
        
        $user = $registo['idCliente'];
        $email = $registo['email_cliente'];
        $tipo = $registo['tipoclientes_idTipoCliente'];
        
        $_SESSION['id_Cliente'] = $user;
        $_SESSION['emailCliente'] = $email;
        $_SESSION['tipoclientes_idTipoCliente'] = $tipo;

        header('location:Index2.php?area=addprod');
    }
    else if($numero_de_users_encontrados == 1 && $registo['tipoclientes_idTipoCliente'] == 2 && $ativo == 1)
    {
        session_start();
        
        $user = $registo['idCliente'];
        $email = $registo['email_cliente'];
        $tipo = $registo['tipoclientes_idTipoCliente'];
        
        $_SESSION['id_Cliente'] = $user;
        $_SESSION['emailCliente'] = $email;
        $_SESSION['tipoclientes_idTipoCliente'] = $tipo;

        header('location:Index.php');
    }
    else if($numero_de_users_encontrados == 1 && $ativo == 0)
    {
        header('location:Index2.php?login=desativado');
    }
    else if($numero_de_users_encontrados != 1)
    {
        header('location:Index2.php?login=erro');
    }
?>