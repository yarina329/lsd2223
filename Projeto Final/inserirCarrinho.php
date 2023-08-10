<?php
    include('config/config.php');

    session_start();

    if(!isset($_SESSION['id_Cliente']))
    {
        header('location:Index2.php');
    }
    else{
        if(!isset($_SESSION['carrinho']))
        {
            $_SESSION['carrinho'] = []; 
        }

        if(isset($_SESSION['idproduto']))
        {
            $id_produto = $_SESSION['idproduto'];
            $_SESSION['carrinho'] [] = $id_produto;

            header('location:Index.php?area=carrinho');
        }
    }
 ?>