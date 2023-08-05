<style>
    .imgPrincipal{
        display: none;
    }
</style>
<div class="conteudo">
    <?php
        $query_a_executar = "select * from produtos 
        inner join series on series_idSerie = idSerie
        inner join categorias on categorias_idCategoria = idCategoria
        where ativo_desconto = 0 and ativo_produto=1  and series_idSerie = 1";
        $result = mysqli_query($ligacao,$query_a_executar);

    ?>
    <h2>Chainsaw Man</h2>
    <?php
        
        while($linha_produtos = mysqli_fetch_assoc($result))
        {
            $_SESSION['id_Produto']= $linha_produtos['idProduto'];
        ?>
            <a href="Index.php?area=detalhesProduto">
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