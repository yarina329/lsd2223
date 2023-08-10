<style>
    .imgPrincipal{
        display: none;
    }
</style>

<?php
    if(!isset($_SESSION['id_Cliente']))
    {
        header('location:Index2.php');
    }
    else{
    if(isset($_SESSION['carrinho']))
    {
        ?>

        <div class="row">
            <div class="col-8">
        <div class="tabela-carrinho">
            <table class="table efect-table">
                <thead class="cabec-tabela">
                    <tr>
                        <th>Nome Produto</th>
                        <th>Preço</th>
                        <th></th>
                    </tr>
                </thead>

                <?php
                    $idCliente = $_SESSION['id_Cliente'];
                    //$idProduto = $_SESSION['id_Produto'];
                    foreach ($_SESSION['carrinho'] as $id) 
                    {
                    $query_a_executar = "select * from produtos 
                    inner join series on series_idSerie = idSerie
                    inner join categorias on categorias_idCategoria = idCategoria
                    where idProduto = $id";
                    
                    $resultadoP = mysqli_query($ligacao,$query_a_executar);

                    $detalhes_produtos = mysqli_fetch_assoc($resultadoP);
                    $desconto = $detalhes_produtos['desconto_produto'];
                $ativo_descont = $detalhes_produtos['ativo_desconto'];

                ?>
                <tbody>
                    <tr>
                        <th><img src="imagens/Produtos/<?php echo $detalhes_produtos['foto_produto'];?>" title="<?php echo $detalhes_produtos['nome_produto'];?>">
                        <?php echo $detalhes_produtos['nome_produto'];?></th>
                        <th>
                        <div>
                            <?php
                            $valor = 0.00;
                            if($desconto == $valor || $ativo_descont == 0)
                            { 
                            ?>
                                <h4 id="preco"><?php echo $detalhes_produtos['preco_produto'];?>€
                            </h4>
                            <?php
                            }
                            else if($desconto != $valor || $ativo_descont == 1)
                            {
                            ?>
                                <h4 id="preco"><?php echo $detalhes_produtos['desconto_produto'];?>€
                            </h4>
                            <?php
                            }
                            ?>
                        </div>
                            
                        </th>
                        <th><a href=""><i class="fa-solid fa-trash-can"></i></a></th>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div></div>

        
        <div class="col-4">
            <div class="totalCart">
                <h4>Total do Pedido</h4>
                <div class="barra-cart"></div>
            </div>
            <div class="total">
                <h4 id="totl"></h4>

                    <?php
                        $total = 0;

                        foreach ($_SESSION['carrinho'] as $id) 
                        {
                            $query = "select * from produtos 
                                inner join series on series_idSerie = idSerie
                                inner join categorias on categorias_idCategoria = idCategoria
                                where idProduto = $id";
                            $resultado = mysqli_query($ligacao, $query);

                            $preco_produto = mysqli_fetch_assoc($resultado);

                            $produto = $preco_produto['preco_produto'];
                            $desconto_produto = $preco_produto['desconto_produto'];
                            $ativoD = $preco_produto['ativo_desconto'];
                            if($ativoD == 1){
                                $quantidade = 1;
                                $preco_total = $desconto_produto * $quantidade;

                                $total += $preco_total; 
                                
                                $_SESSION['total'] = $total;
                            }
                            else{
                                $quantidade = 1;
                                $preco_total = $produto * $quantidade;
    
                                $total += $preco_total; 
                                
                                $_SESSION['total'] = $total;
                            }

                        }

                    ?>
                    <script type="text/JavaScript">
                        document.getElementById("totl").innerHTML = <?php echo $total ?>+"€";
                    </script>

                    <?php
                    
                    ?>
            </div>
            <div class="buttonCarrinho">
                <button onclick="window.location.href='Index.php'">Continuar Compra</button>
                <button onclick="window.location.href='pedidofinalizado.php'">Finalizar Compra</button>
            </div>
        </div>
    </div>
    


<?php
    }
}
    ?>