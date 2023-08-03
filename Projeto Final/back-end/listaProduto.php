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
                        <a href="Index2.php?area=listaprodut" class="linklist">Lista de Produtos <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacarrinho">Lista de Carrinho <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacliente">Lista de Clientes <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacomentario">Lista de Comentários <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-9 cx-1">
                    <div class="row">
                        <?php include('back-end/subMenu.php');?>
                        <div class="col-12">
                            
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">

                            <table class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                    <th scope="col">Nº.</th>
                                    <th scope="col">Nome Produto</th>
                                    <th scope="col">Ativo</th>
                                    <th scope="col">Editar</th>
                                    </tr>
                                </thead>
                                <?php
                                    $query_a_executar = "select * from produtos";
                            
                                    $result = mysqli_query($ligacao,$query_a_executar);

                                    while($listaprodt = mysqli_fetch_assoc($result))
                                    {
                                    
                                ?>
                                <tbody>
                                    <tr>
                                    <th scope="row"><?php echo $listaprodt['idProduto']; ?></th>
                                    <td><?php echo $listaprodt['nome_produto']; ?></td>
                                    <td><?php echo $listaprodt['ativo_produto']; ?></td>
                                    <td><a href="update.php?id=<?php echo $listaprodt['idProduto']; ?>"><i class="fa-solid fa-trash-can"></i></a>  <a href="update2.php?id=<?php echo $listaprodt['idProduto']; ?>"><i class="fa-solid fa-eye"></i></a></td>
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