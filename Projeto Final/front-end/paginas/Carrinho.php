<?php
    if(!isset($_SESSION['id_Cliente']))
    {
        header('location:Index2.php');
    }
    else
    {
        $idProduto = $_SESSION['id_Produto'];
        $query_a_executar = "select * from categorias
        inner join produtos on fk_idCategoria = idCategoria
        inner join series on fk_idSerie = idSerie
        where idProduto = ".$idProduto;
        
        $resultadoP = mysqli_query($ligacao,$query_a_executar);

        $detalhes_produtos = mysqli_fetch_assoc($resultadoP);

        ?>
        <div class="row">
            <div class="col-10">
        <div class="tabela-carrinho">
            <table class="table efect-table">
                <thead class="cabec-tabela">
                    <tr>
                        <th>Nome Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><img src="imagens/Produtos/<?php echo $detalhes_produtos['foto_produto'];?>" title="<?php echo $detalhes_produtos['nome_produto'];?>"><?php echo $detalhes_produtos['nome_produto'];?></th>
                        <th><h4><?php echo $detalhes_produtos['preco_produto'];?></h4><h4>€</h4></th>
                        <th></th>
                        <th>
                        <script type="text/JavaScript">
                            $(function({
                                var preco  = <?php $detalhes_produtos['preco_produto'];?>;
                                var quant = 2;

                                var total = preco * quant;

                                print_r(total);
                            }))
                            
                        </script>
                        </th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
        </div></div>

        <div class="col-2">
            <div class="totalCart">
                <h4>Total do Pedido</h4>
            </div>
            
        </div></div>
    <?php
    }
    ?>