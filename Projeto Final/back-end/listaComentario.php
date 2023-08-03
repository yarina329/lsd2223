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
                        <a href="Index2.php?area=listacarrinho">Lista de Carrinho <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacliente">Lista de Clientes <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacomentario" class="linklist">Lista de Comentários <i class="fa-solid fa-chevron-right"></i></a>
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
                                <th scope="col">Foto</th>
                                <th scope="col">Comentário</th>
                                <th scope="col">Editar</th>
                                </tr>
                            </thead>
                            <?php
                                $query_executar = "select * from comentarios";
                        
                                $resultado = mysqli_query($ligacao,$query_executar);

                                while($listacomentario = mysqli_fetch_assoc($resultado))
                                {
                                
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?php echo $listacomentario['idComentario']; ?></th>
                                <td><img src="imagens/Foto-comentario/<?php echo $listacomentario['foto'];?>" title="<?php echo $listacomentario['foto'];?>"></td>
                                <td><?php echo $listacomentario['comentario']; ?></td>
                                <td><a href="delete.php?id=<?php echo $listacomentario['idComentario']; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
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