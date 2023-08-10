
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

<script>
  const carosel = document.querySelector(".carosel");
const arrowBtns = document.querySelectorAll(".visualizarcarosel i");
const firstCardWidth = carosel.querySelector(".listacarosel").offsetWidth;
const caroselChildrens = [...carosel.children];

let isDragging = false, startX, startScrollLeft;

let cardPerView = Math.round(carosel.offsetWidth / firstCardWidth);

caroselChildrens.slice(-cardPerView).reverse().forEach(listacarosel => {
    carosel.insertAdjacentHTML("afterbegin", listacarosel.outerHTML);
});

caroselChildrens.slice(0, cardPerView).forEach(listacarosel => {
    carosel.insertAdjacentHTML("beforeend", listacarosel.outerHTML);
});

arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carosel.scrollLeft += btn.id === "esquerda" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carosel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carosel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return;
    carosel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carosel.classList.remove("dragging");
}

carosel.addEventListener("mousedown", dragStart);
carosel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
</script>