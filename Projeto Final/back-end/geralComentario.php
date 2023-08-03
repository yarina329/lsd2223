  
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
        $query_a_executar = "select * from clientes
        where idCliente = ".$idCliente;
        
        $resultCliente = mysqli_query($ligacao,$query_a_executar);

        $infCliente = mysqli_fetch_assoc($resultCliente);

        $_SESSION['email'] = $infCliente['email_cliente'];
        ?>
        <div class="addProd">
            <div class="row">
                <div class="col-3 perfil">
                    <div>
                        <img src="imagens/perfil/perfil.png" title="Imagem de perfil">
                        <p><?php echo $infCliente['email_cliente'];?></p>
                    </div>
                    <div class="listaGeral">
                    <a href="Index2.php?area=geralcliente" class="linklist">Geral<i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=gerallistaproduto">Lista de Produtos <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=geralcomentario">Lista de Carrinho <i class="fa-solid fa-chevron-right"></i></a>
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
                            
                        <div class="cx-Add">
                            <div class="formulaAdd">
                                <div id="mensagem">
                                </div>
                                <form method="post" action="inserirComentario.php" enctype="multipart/form-data">
                                    <ul>
                                        <li>Foto: <input type="file" name = "foto"></li>
                                        <li>Comentário: <textarea type="text" name = "comentario"></textarea></li>
                                        <li>
                                            <button>Guardar</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <?php
                            if(isset($_GET['status']) && $_GET['status'] == 'ok')
                            {
                                ?>
                                <script type="text/JavaScript">
                                document.getElementById("mensagem").innerHTML = 'Comentário inserido com sucesso!!!';
                                
                                </script>
                                <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
        else{
            header('location:Index2.php?area=addprod');
        }
    }
    ?>