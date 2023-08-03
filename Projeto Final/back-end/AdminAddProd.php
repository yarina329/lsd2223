  
<?php
    if(!isset($_SESSION['id_Cliente']))
    {
        header('location:Index2.php');
    }
    else
    {
        if($_SESSION['tipoclientes_idTipoCliente'] == 1)
        {
        $idCliente = $_SESSION['id_Cliente'];
        $query_a_executar = "select email_cliente from clientes
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
                        <a href="Index2.php?area=addprod" class="linklist">Adicionar Produto <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listaprodut">Lista de Produtos <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacarrinho">Lista de Carrinho <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacliente">Lista de Clientes <i class="fa-solid fa-chevron-right"></i></a>
                        <a href="Index2.php?area=listacomentario">Lista de Comentários <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-9 cx-1">
                    <div class="row">
                            <?php include('back-end/subMenu.php');?>
                        <div class="col-12">
                            <?php include('back-end/TabelaInserirProd.php');?>
                        </div>
                    </div>
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