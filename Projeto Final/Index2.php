<?php
  include('config/config.php');
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DYAnim</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width:500px)">
    <link rel="stylesheet" href="font-awesome/css/all.css">

</head>
<body>
        <div class="base-princ">
            <?php include('back-end/HeaderFrontEnd.php'); ?>

            <div>
            <?php 

                if(isset($_GET['area'])){
                    $area_escolhida = $_GET['area'];

                    if($area_escolhida == 'registo'){
                        include('back-end/Registo.php');
                    }
                    else if($area_escolhida == 'addprod'){
                        include('back-end/AdminAddProd.php');
                    }
                    else if($area_escolhida == 'listaprodut'){
                        include('back-end/listaProduto.php');
                    }
                    else if($area_escolhida == 'listacarrinho'){
                        include('back-end/listaCarrinho.php');
                    }
                    else if($area_escolhida == 'listacliente'){
                        include('back-end/listaCliente.php');
                    }
                    else if($area_escolhida == 'geralcliente'){
                        include('back-end/geralCliente.php');
                    }
                    else if($area_escolhida == 'gerallistaproduto'){
                        include('back-end/geralListaProduto.php');
                    }
                    else if($area_escolhida == 'geralcomentario'){
                        include('back-end/geralComentario.php');
                    }
                    else{
                        include('./erro.php');
                    }
                }
                else{
                    include('back-end/Login.php');
                }
            
            ?>
            </div>
            <?php include('front-end/Footer.php'); ?>
        </div>
</body>

<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/javascript.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>

</html>