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
            

        <div class="conteudo">
            <?php
                $query_a_executar = "select * from categorias
                inner join produtos on fk_idCategoria = idCategoria
                inner join series on fk_idSerie = idSerie
                where ativo_desconto = 0 and idCategoria = 1";
                $resultado = mysqli_query($ligacao,$query_a_executar);

                $linha_produtos = mysqli_fetch_assoc($resultado)
            ?>

            <h2><?php echo $linha_produtos['nome_categoria']?></h2>
                <?php
                    while($linha_produtos = mysqli_fetch_assoc($resultado))
                    {
                ?>
                <div class="conteudo_detalhes">
                    <div class="col-1">
                        <div class="produtos">
                            <div class="imageProduto">
                                <img src="imagens/Produtos/<?php echo $linha_produtos['foto_produto'];?>" title="<?php echo $linha_produtos['nome_produto'];?>">
                            </div>
                            <div class="detalheProduto">
                                <h4><?php echo $linha_produtos['preco_produto'];?></h4><h4>€</h4>
                                <p class="titlProduto"><?php echo $linha_produtos['nome_serie'];?></p>
                                <p class="SubtitlProduto"><?php echo $linha_produtos['nome_produto'];?></p>
                            </div>  
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</body>

<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/javascript.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>

</html>