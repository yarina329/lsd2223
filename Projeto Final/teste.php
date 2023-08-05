<div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <?php
                    $query_a_executar = "select * from produtos 
                    inner join series on series_idSerie = idSerie
                    where ativo_desconto = 0 and ativo_produto=1";
                    $result = mysqli_query($ligacao,$query_a_executar);

                    while($linha_produtos = mysqli_fetch_assoc($result))
                    {
                              
                    $_SESSION['id_Produto']= $linha_produtos['idProduto'];
                ?>
                <div class="card swiper-slide carros">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="imagens/Produtos/<?php echo $linha_produtos['foto_produto'];?>" title="<?php echo $linha_produtos['nome_produto'];?>">
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name"><?php echo $linha_produtos['nome_produto'];?></h2>
                        <p class="description"><?php echo $linha_produtos['nome_serie'];?></p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>