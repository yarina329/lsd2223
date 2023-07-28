
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
                        <!--
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </button>

                        <input id="form1" min="0" name="quantity" value="1" type="number"
                            class="form-control form-control-sm" />

                        <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>
                        </div>
-->
                        <p><?php echo $detalhes_produtos['sugestao_produto'];?></p>
                        <button><b>Adicionar</b></button>
                    </div>
                </div>
            </div></form>
            <div class="barra"></div>

        </div>