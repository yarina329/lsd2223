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
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <script src="js/script.js" defer></script>

</head>
<body>
        <div class="base-princ">
            <?php include('front-end/Header.php'); ?>
            <div class="imgPrincipal">
                <video autoplay muted>
                    <source src="imagens/video/Vrs1.mp4">
                </video>
            </div>

            <div>
            <?php 

                if(isset($_GET['area'])){
                    $area_escolhida = $_GET['area'];

                    if($area_escolhida == 'roupa'){
                        include('front-end/paginas/Roupa.php');
                    }
                    else if($area_escolhida == 'mantas'){
                        include('front-end/paginas/Manta.php');
                    }
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
                    }
                    else if($area_escolhida == 'detalhesProduto'){
                        include('front-end/paginas/DetalhesProduto.php');
                    }
                    else if($area_escolhida == 'carrinho'){
                        include('front-end/paginas/Carrinho.php');
                    }
                    else if($area_escolhida == 'mensagem'){
                        include('front-end/paginas/mensagem.php');
                    }
                    else if($area_escolhida == 'listacm'){
                        include('front-end/paginas/ListaCM.php');
                    }
                    else if($area_escolhida == 'listads'){
                        include('front-end/paginas/ListaDS.php');
                    }
                    else if($area_escolhida == 'listasxf'){
                        include('front-end/paginas/ListaSXF.php');
                    }
                    else if($area_escolhida == 'listan'){
                        include('front-end/paginas/ListaN.php');
                    }
                    else if($area_escolhida == 'favorito'){
                        include('front-end/paginas/Favorito.php');
                    }
                    else if($area_escolhida == 'resultpesquisa'){
                        include('front-end/paginas/resultpesquisa.php');
                    }
                    else if($area_escolhida == 'mensagem'){
                        include('front-end/paginas/mensagem.php');
                    }
                    else if($area_escolhida == 'comentario'){
                        include('front-end/paginas/comentario.php');
                    }
                    else{
                        include('erro.php');
                    }
                }
                else{
                    include('front-end/paginas/listaProdutos.php');
                }
            
            ?>
            </div>
            <?php include('front-end/Categoria.php'); ?>
            <?php include('front-end/Footer.php'); ?>
        </div>
</body>

<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/javascript.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>

</html>