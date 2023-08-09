<style>
    .imgPrincipal{
        display: none;
    }
</style>

<div class="conteudo">
            <?php
                $query_executar = "select DISTINCT * from categorias
                inner join produtos on categorias_idCategoria = idCategoria
                inner join series on series_idSerie = idSerie
                where ativo_produto = 1 and idCategoria = 4";
                $resultado = mysqli_query($ligacao,$query_executar);
            ?>

            <h2>ACESSÓRIOS</h2>
                <?php
                    while($linha_produtos = mysqli_fetch_assoc($resultado))
                    {
                        $desconto = $linha_produtos['desconto_produto'];
                        $ativo_descont = $linha_produtos['ativo_desconto'];
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
                            <div>
                                <?php
                                $valor = 0.00;
                                if($desconto == $valor || $ativo_descont == 0)
                                { 
                                ?>
                                    <h5> </h5>
                                <?php
                                }
                                else if($desconto != $valor || $ativo_descont == 1)
                                {
                                ?>
                                    <h5><?php echo $linha_produtos['desconto_produto'];?>€</h5>
                                <?php
                                }
                                ?>
                            </div>
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