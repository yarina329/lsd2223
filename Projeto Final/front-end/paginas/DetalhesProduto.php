<style>
    .imgPrincipal{
        display: none;
    }
</style>
        <div>
            <?php
                $idProduto = $_SESSION['id_Produto'];
                $query_a_executar = "select * from categorias
                inner join produtos on fk_idCategoria = idCategoria
                inner join series on fk_idSerie = idSerie
                where idProduto = ".$idProduto;
        
                $resultadoP = mysqli_query($ligacao,$query_a_executar);

                $detalhes_produtos = mysqli_fetch_assoc($resultadoP);
            ?>

            <form action="inserirCarrinho.php">
            <div class="DtlProduto">
                <div class="visualizarProduto">
                    <div class="imagem">
                        <img src="imagens/Produtos/<?php echo $detalhes_produtos['foto_produto'];?>" title="<?php echo $detalhes_produtos['nome_produto'];?>">
                    </div>
                    <div class="detalhes">
                        <h4><?php echo $detalhes_produtos['preco_produto'];?></h4><h4>€</h4>
                        <p><?php echo $detalhes_produtos['nome_produto'];?></p>
                        <p><b></b><?php echo $detalhes_produtos['nome_serie'];?></p>
                        <p><?php echo $detalhes_produtos['sugestao_produto'];?></p>
                        <button><b>Adicionar</b></button>
                    </div>
                </div>
            </div></form>
            <div class="barra"></div>

        </div>