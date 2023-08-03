<?php
    if(!isset($_SESSION['id_Cliente']))
    {
        header('location:Index2.php');
    }
    else
    {
        if($_SESSION['tipoclientes_idTipoCliente'] != 1)
        {
            $idCliente = $_SESSION['id_Cliente'];
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
                        <a href="Index2.php?area=addprod">Geral<i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=gerallistaproduto">Lista de Produtos<i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=geralcomentario">Comentário<i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=gerallistacomentario" class="linklist">Lista de Comentários<i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-9 cx-1">
                    <div class="row">
                        <div class="col-8">
                            <div class="cx-2 cx-3">
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
                            <div class="cx-2 cx-4">
                                <p>Núm de Compras</p>
                                <?php
                                    $query_a_executar = "select count(idCarrinho) As 'nCarrinho' from carrinhos";
                                    
                                    $count = mysqli_query($ligacao,$query_a_executar);
                            
                                    $result = mysqli_fetch_assoc($count);
                                ?>
                                <p><?php echo $result['nCarrinho']; ?></p>
                            </div>
                        </div>
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
                            <tbody>
                            <?php
                                $query_a_executar = "select * from comentarios
                                where clientes_idCliente = $idCliente";
                        
                                $result = mysqli_query($ligacao,$query_a_executar);

                                while($listacomentario = mysqli_fetch_assoc($result))
                                {
                            
                            ?>
                                <tr>
                                <th scope="row"><?php echo $listacomentario['idComentario']; ?></th>
                                <td><img src="imagens/Foto-comentario/<?php echo $listacomentario['foto'];?>" title="<?php echo $listacomentario['foto'];?>"></td>
                                <td><?php echo $listacomentario['comentario']; ?></td>
                                <td><a href="delete.php?id=<?php echo $listacomentario['idComentario']; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                            </table>

                        </div>
            </div>
        </div>
    <?php
        }
        else{
            header('location:Index2.php?area=listacomentario');
        }
    }
    ?>