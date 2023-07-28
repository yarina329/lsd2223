<?php
  include('config/config.php');
  include('funcoes/funcoes.php');
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

                    if($area_escolhida == 'geral'){
                        include('back-end/GeralAdmin.php');
                    }
                    else if($area_escolhida == 'registo'){
                        include('back-end/Registo.php');
                    }/*
                    else if($area_escolhida == 'figuras'){
                        include('front-end/paginas/Figuras.php');
                    }
                    else if($area_escolhida == 'detalhesProduto'){
                        include('front-end/paginas/DetalhesProduto.php');
                    }
                    else if($area_escolhida == 'acessorios'){
                        include('front-end/paginas/Acessorio.php');
                    }
                    else if($area_escolhida == 'outros'){
                        include('front-end/paginas/Outros.php');
                    }*/
                    else{
                        include('erro.php');
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