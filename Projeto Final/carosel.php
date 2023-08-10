
<div class="visualizarcarosel">
  <i id="esquerda" class="fa-solid fa-chevron-left"></i>
    <ul class="carosel">
      <?php
        $query_a_executar = "select DISTINCT * from produtos 
        inner join series on series_idSerie = idSerie
        where ativo_desconto = 1 and ativo_produto = 1";
        $result = mysqli_query($ligacao,$query_a_executar);

        while($linha_produtos = mysqli_fetch_assoc($result))
        {
          $idProduto= $linha_produtos['idProduto'];
      ?>
      <a href="Index.php?area=detalhesProduto&id_Produto=<?php echo $idProduto;?>">
        <li class="listacarosel">
          <div class="imagem">
            <img src="imagens/Produtos/<?php echo $linha_produtos['foto_produto'];?>" title="<?php echo $linha_produtos['nome_produto'];?>" draggable="false">
          </div>
          <div class="detalheProduto">
          <div>
            <h5><?php echo $linha_produtos['desconto_produto'];?>€</h5>
          </div>
            <h4><?php echo $linha_produtos['preco_produto'];?>€</h4>
            <p class="titlProduto"><?php echo $linha_produtos['nome_serie'];?></p>
            <p class="SubtitlProduto"><?php echo $linha_produtos['nome_produto'];?></p>
          </div> 
        </li>
      </a>
        <?php
        }
        ?>
    </ul>
  <i id="direita" class="fa-solid fa-chevron-right"></i>
</div>
