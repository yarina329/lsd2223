<div class="conteudo">
                <h2>DESCONTOS</h2>
                <div class="desc-produto">
                    <?php include('carosel.php'); ?>
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

            <?php include('front-end/paginas/barrapesquisa.php'); ?>

            <div class="conteudo">
                <h2>TOP 15</h2>
                        <?php
                            $query_a_executar = "select DISTINCT * from produtos 
                            inner join series on series_idSerie = idSerie
                            where ativo_desconto = 0 and ativo_produto=1";
                            $result = mysqli_query($ligacao,$query_a_executar);

                            while($linha_produtos = mysqli_fetch_assoc($result))
                            {
                               
                                $idProduto= $linha_produtos['idProduto'];
                ?>
                <a href="Index.php?area=detalhesProduto&id_Produto=<?php echo $idProduto;?>">
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
                        </a>
                        <?php
                                }
                        ?>
            </div>