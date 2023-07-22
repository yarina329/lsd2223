<?php
  include('config/config.php');
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
            <?php include('front-end/Header.php'); ?>
            <div class="imgPrincipal">
                    <img src="./imagens/teste.jpg" alt="">
            </div>
        <div>
            <?php

                $idProduto = $_GET['id'];
                $query_a_executar = "select * from categorias
                inner join produtos on fk_idCategoria = idCategoria
                inner join series on fk_idSerie = idSerie
                where idProduto = ".$idProduto;

        
                $resultadoP = mysqli_query($ligacao,$query_a_executar);

                $detalhes_produtos = mysqli_fetch_assoc($resultadoP);
            ?>
            <div class="DtlProduto">
                <div class="visualizarProduto">
                    <div class="imagem">
                        <img src="imagens/Produtos/<?php echo $detalhes_produtos['foto_produto'];?>" title="<?php echo $linha_produtos['nome_produto'];?>">
                    </div>
                    <div class="detalhes">
                        <h4><?php echo $detalhes_produtos['preco_produto'];?></h4><h4>€</h4>
                        <p><?php echo $detalhes_produtos['nome_produto'];?></p>
                        <p><b></b><?php echo $detalhes_produtos['nome_serie'];?></p>
                        <p><?php echo $detalhes_produtos['sugestao_produto'];?></p>
                    </div>
                </div>
            </div>

        </div>

<?php include('front-end/Footer.php'); ?>
</div>
</body>

<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/javascript.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>

</html>