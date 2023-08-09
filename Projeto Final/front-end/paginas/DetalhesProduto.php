<style>
    .imgPrincipal{
        display: none;
    }
</style>
        <div>
            <?php
                $idProduto = $_GET['id_Produto'];

                $query_a_executar = "select * from categorias
                inner join produtos on categorias_idCategoria = idCategoria
                inner join series on series_idSerie = idSerie
                where idProduto = ".$idProduto;
        
                $resultadoP = mysqli_query($ligacao,$query_a_executar);

                $detalhes_produtos = mysqli_fetch_assoc($resultadoP);

                $desconto = $detalhes_produtos['desconto_produto'];
                $ativo_descont = $detalhes_produtos['ativo_desconto'];
                $_SESSION['idproduto'] = $detalhes_produtos['idProduto'];
            ?>

            <form action="inserirCarrinho.php">
            <div class="DtlProduto">
                <div class="visualizarProduto">
                    <div class="imagem">
                        <img src="imagens/Produtos/<?php echo $detalhes_produtos['foto_produto'];?>" title="<?php echo $detalhes_produtos['nome_produto'];?>">
                    </div>
                    <div class="detalhes">
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
                            <h5><?php echo $detalhes_produtos['desconto_produto'];?>€</h5>
                        <?php
                        }
                        ?>
                    </div>
                        <h4><?php echo $detalhes_produtos['preco_produto'];?></h4><h4>€</h4>
                        <p><?php echo $detalhes_produtos['nome_produto'];?></p>
                        <p><b></b><?php echo $detalhes_produtos['nome_serie'];?></p><a href="updatefavorito.php"><i class="fa-solid fa-heart"></i></a>
                        <p><?php echo $detalhes_produtos['sugestao_produto'];?></p>
                        <button><b>Adicionar</b></button>
                    </div>
                </div>
            </div></form>
            <div class="barra"></div>
            <div class="desc-produto">
                    <?php include('carosel.php'); ?>
                </div>
        </div>