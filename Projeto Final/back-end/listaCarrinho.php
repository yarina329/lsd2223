<?php
    if(!isset($_SESSION['id_Cliente']))
    {
        header('location:Index2.php');
    }
    else
    {
        if($_SESSION['tipoclientes_idTipoCliente'] == 1)
        {
        $_SESSION['email'];
        ?>
        <div class="addProd">
            <div class="row">
                <div class="col-3 perfil">
                    <div>
                        <img src="imagens/perfil/perfil.png" title="Imagem de perfil">
                        <p><?php echo $_SESSION['email'];?></p>
                    </div>
                    <div class="listaGeral">
                        <a href="Index2.php?area=addprod">Adicionar Produto <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listaprodut">Lista de Produtos <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacarrinho" class="linklist">Lista de Carrinho <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacliente">Lista de Clientes <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacomentario">Lista de Comentários <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-9 cx-1">
                    <div class="row">
                        <div class="col-4">
                            <div class="cx-2">
                                <p>Núm de Comentários</p>
                                <?php
                                    $query_a_executar = "select count(idComentario) As 'nComentario' from comentarios";
                                    
                                    $count = mysqli_query($ligacao,$query_a_executar);
                            
                                    $result = mysqli_fetch_assoc($count);
                                ?>
                                <p><?php echo $result['nComentario']; ?></p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="cx-2">
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
                            
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">

                            <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                <th scope="col">Nº.</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Total</th>
                                <th scope="col">Email Cliente</th>
                                <th scope="col">Produtos</th>
                                <th scope="col">Editar</th>
                                </tr>
                            </thead>
                            <?php
                                $query_executar = "select produtos.idProduto, carrinhos.*, clientes.email_cliente from produtos 
                                inner join carrinhos on idProduto = produtos_idProduto
                                inner join clientes on idCliente = clientes_idCliente
                                where carrinhos.ativo = 1";
                        
                                $resultado = mysqli_query($ligacao,$query_executar);

                                while($listacarrinho = mysqli_fetch_assoc($resultado))
                                {
                                
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?php echo $listacarrinho['idCarrinho']; ?></th>
                                <td><?php echo $listacarrinho['quantidad_carrinho']; ?></td>
                                <td><?php echo $listacarrinho['total_carrinho']; ?></td>
                                <td><?php echo $listacarrinho['email_cliente']; ?></td>
                                <td><?php echo $listacarrinho['idProduto']; ?></td>
                                <td><a href="updateC.php?id=<?php echo $listacarrinho['idCarrinho']; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                                </tr>
                            </tbody>
                            <?php
                            }
                            ?>
                            </table>

                        </div>
            </div>
        </div>
    <?php
    }
    else{
        header('location:Index2.php?area=geralcliente');
    }
    }
    ?>