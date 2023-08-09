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
    else
    {
        if($_SESSION['tipoclientes_idTipoCliente'] == 2)
        {
            $idCliente = $_SESSION['id_Cliente']
        ?>
        <div class="table-wrapper-scroll-y">
            <table class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col">Nº.</th>
                        <th scope="col">Nome Produto</th>
                        <th scope="col">Preco</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                    <?php
                        $query_a_executar = "select DISTINCT * from produtos
                        inner join favoritos on produtos_idProduto = idProduto
                        inner join clientes on clientes_idCliente = idCliente
                        where ativo = 1 and idCliente = $idCliente";
                            
                        $result = mysqli_query($ligacao,$query_a_executar);

                        while($listaprodt = mysqli_fetch_assoc($result))
                        {
                                    
                    ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $listaprodt['idProduto']; ?></th>
                        <td><?php echo $listaprodt['nome_produto']; ?></td>
                        <td><?php echo $listaprodt['preco_produto']; ?></td>
                        <td><a href="favupdate.php?id=<?php echo $listaprodt['idProduto']; ?>&idc=<?php echo $idCliente ?>"><i class="fa-solid fa-heart"></i></a></td>
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
            header('location:Index.php');
        }
    }
?>