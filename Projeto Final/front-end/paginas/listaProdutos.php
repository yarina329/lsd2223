<h2>TOP 15</h2>

<?php
    $query_a_executar = "select * from produtos 
    inner join series on fk_idSerie = idSerie
    where ativo_desconto = 0";
    $resultado = mysqli_query($ligacao,$query_a_executar);

    while($linha_produtos = mysqli_fetch_assoc($resultado))
    {

?>
    <div class="conteudo_detalhes">
        <div class="col-1">
            <div class="produtos">
                <div class="imageProduto">
                    <img src="imagens/Produtos/<?php echo $linha_produtos['foto_produto'];?>" title="<?php echo $linha_produtos['nome_produto'];?>">
                </div>
                <div class="detalheProduto">
                    <h4><?php echo $linha_produtos['preco_produto'];?></h4><h4>€</h4>
                    <p class="titlProduto"><?php echo $linha_produtos['nome_serie'];?></p>
                    <p class="SubtitlProduto"><?php echo $linha_produtos['nome_produto'];?></p>
                </div>  
            </div>           
        </div>
    </div>
    <?php
    }
?>