<?php
    if(!isset($_SESSION['id_Cliente']))
    {
        header('location:Index2.php');
    }
    else
    {
        $idCliente = $_SESSION['id_Cliente'];
        $query_a_executar = "select email_cliente from clientes
        where idCliente = ".$idCliente;
        
        $resultCliente = mysqli_query($ligacao,$query_a_executar);

        $infCliente = mysqli_fetch_assoc($resultCliente);
        ?>
        <div class="addProd">
            <div class="row">
                <div class="col-3 perfil">
                    <div>
                        <img src="imagens/perfil/perfil.png" title="Imagem de perfil">
                        <p><?php echo $infCliente['email_cliente'];?></p>
                    </div>
                    <div class="listaGeral">
                        <a href="">Adicionar Produto</a>
                        <a href="">Lista de Produtos</a>
                        <a href="">Lista de Pedidos Pendentes</a>
                        <a href="">Lista de Clientes</a>
                    </div>
                </div>
                <div class="col-9 cx-1">
                    <div class="row">
                        <div class="col-8">
                            <div class="cx-2 cx-3">
                                <p>Núm de Produtos</p>
                                <?php
                                    $query_a_executar = "select count(idProduto) As 'nProduto' from produtos";
                                    
                                    $count = mysqli_query($ligacao,$query_a_executar);
                            
                                    $result = mysqli_fetch_assoc($count);
                                ?>
                                <p><?php echo $result['nProduto']; ?></p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="cx-2 cx-4">
                                <p>Núm de Clientes</p>
                                <?php
                                    $query_a_executar = "select count(idCliente) As 'nCliente' from Clientes";
                                    
                                    $count = mysqli_query($ligacao,$query_a_executar);
                            
                                    $result = mysqli_fetch_assoc($count);
                                ?>
                                <p><?php echo $result['nCliente']; ?></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4>jbjhbjh</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>