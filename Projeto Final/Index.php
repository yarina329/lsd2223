<?php
  include('config.php');
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
            <div class="conteudo">
                <h2>DESCONTOS</h2>
                <div class="desc-produto">
                    <div class="imageProduto">
                        <img src="imagens/Produtos/<?php echo $linha['foto_produto'];?>" title="Produto em desconto">
                    </div>
                    <div class="detalheProduto">
                        <h5>35.00</h5><h5>€ /</h5>
                        <h4>32.50</h4>€
                        <p class="titlProduto">Figura Naruto</p>
                        <p class="SubtitlProduto">Mandara Uchiba</p>
                    </div>
                </div>
            </div>
            <div class="barra-principal">
                <div  class="texto">
                   <h1>BEM VINDO AO <br> MUNDO ANIME!</h1>
                    <p>Navegue por nossas categorias e descubra animes <br>
                    de diferentes gêneros: ação, romance, fantasia, <br>
                    ficção científica e muito mais nos nosso produtos.</p> 
                </div>
            </div>

            <div class="barra-pesquisa">
                <input type="text" placeholder="Pesquisa...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            <div class="conteudo">
                <h2>TOP 15</h2>
                    <div class="col-1">
                        <div class="produtos">
                            <div class="imageProduto">
                                <img src="imagens/teste.jpg" alt="">  
                            </div>
                            <div class="detalheProduto">
                                <h5>35.00</h5><h5>€ /</h5>
                                <br>
                                <h4>32.50</h4><h4>€</h4>
                                <p class="titlProduto">Figura Naruto</p>
                                <p class="SubtitlProduto">Mandara Uchiba</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="produtos">
                            <div class="imageProduto">
                                <img src="imagens/teste.jpg" alt="">             
                            </div>
                            <div class="detalheProduto">
                                <h5>35.00</h5><h5>€ /</h5>
                                <br>
                                <h4>32.50</h4><h4>€</h4>
                                <p class="titlProduto">Figura Naruto</p>
                                <p class="SubtitlProduto">Mandara Uchiba</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="produtos">
                            <div class="imageProduto">
                                <img src="imagens/teste.jpg" alt="">     
                            </div>
                            <div class="detalheProduto">
                                <h5>35.00</h5><h5>€ /</h5>
                                <br>
                                <h4>32.50</h4><h4>€</h4>
                                <p class="titlProduto">Figura Naruto</p>
                                <p class="SubtitlProduto">Mandara Uchiba</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="produtos">
                            <div class="imageProduto">
                                <img src="imagens/teste.jpg" alt="">     
                            </div>
                            <div class="detalheProduto">
                                <h5>35.00</h5><h5>€ /</h5>
                                <br>
                                <h4>32.50</h4><h4>€</h4>
                                <p class="titlProduto">Figura Naruto</p>
                                <p class="SubtitlProduto">Mandara Uchiba</p>
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