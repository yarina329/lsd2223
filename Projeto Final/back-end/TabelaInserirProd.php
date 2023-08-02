<?php
    include('funcoes.php');
    include('config/config.php');
?>

<div class="cx-Add">
    <div class="formulaAdd">
        <div id="mensagem">
                </div>
        <form method="post" action="inserProduto.php" enctype="multipart/form-data">
            <ul>
                <li>Foto: <input type="file" name = "fotoP"></li>
                <li>Nome do Produto: <input type="text" name = "produto"></li>
                <li>Nome da Serie: <select name="serie">
                                        <?php
                                            $lista_serie = getSerie($ligacao);

                                            while($linha_serie = mysqli_fetch_assoc($lista_serie))
                                            {
                                        ?>
                                        <option value="<?php echo $linha_serie['idSerie']?>"><?php echo $linha_serie['nome_serie'];?></option>
                                        <?php } ?>
                                    </select></li>
                <li>categoria: <select name="categoria">
                                    <?php
                                        $lista_categoria = getCategoria($ligacao);

                                        while($linha_categoria = mysqli_fetch_assoc($lista_categoria))
                                        {
                                    ?>
                                    <option value="<?php echo $linha_categoria['idCategoria']?>"><?php echo $linha_categoria['nome_categoria'];?></option>
                                    <?php } ?>
                                </select>
                                        </li>
                <li>Preço: <input type="text" name = "preco"></li>
                <li>Stock: <input type="text" name = "stock"></li>
                <li>Sugestão: <textarea type="text" name = "sugest"></textarea></li>
                <li>Produto Ativo: <select name="ativoprod">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                </li>
                <li>Preço Desconto: <input type="text" name = "precodes"></li>
                <li>Desconto Ativo: <select name="ativodesc">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                </li>
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
                document.getElementById("mensagem").innerHTML = 'Dados inseridos com sucesso!!!';
                
                </script>
                <?php
            }
        ?>
