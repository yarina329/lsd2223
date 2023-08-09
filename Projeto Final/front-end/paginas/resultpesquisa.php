<style>
    .imgPrincipal{
        display: none;
    }
</style>

<?php
    if(isset($_SESSION['pesquisa']))
    {
        $pesquisa = $_SESSION['pesquisa'];
        ?>
        <div class="conteudo">
                <h2>Resultado da Pesquisa</h2>
                        <?php
                            $query = "select * from produtos 
                            inner join series on series_idSerie = idSerie
                            inner join categorias on categorias_idCategoria = idCategoria
                            where nome_produto like '%$pesquisa%'
                            or nome_serie like '%$pesquisa%'
                            or nome_categoria like '%$pesquisa%'";
                            $result = mysqli_query($ligacao,$query);


                            while($linha_produtos = mysqli_fetch_assoc($result))
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
                                            <h4><?php echo $linha_produtos['preco_produto'];?>€</h4>
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
        <?php
    }
?>