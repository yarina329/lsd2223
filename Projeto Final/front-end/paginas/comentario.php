
<div class="visualizarcomentario">
  <i id="esquerda" class="fa-solid fa-chevron-left"></i>
    <ul class="carousel">
      <?php
        $query = "select DISTINCT * from comentarios";
        $result = mysqli_query($ligacao,$query);

        while($comentario = mysqli_fetch_assoc($result))
        {
      ?>
        <li class="listacomentario">
          <div class="imagem">
            <img src="imagens/Foto-comentario/<?php echo $comentario['foto'];?>" draggable="false">
          </div>
          <div class="detalheProduto">
            <h4><?php echo $comentario['comentario'];?></h4>
          </div> 
        </li>
        <?php
        }
        ?>
    </ul>
  <i id="direita" class="fa-solid fa-chevron-right"></i>
</div>

<script>
    
const carousel = document.querySelector(".carousel");
const arrowBtns = document.querySelectorAll(".visualizarcomentario i");
const firstCardWidth = carousel.querySelector(".listacomentario").offsetWidth;
const carouselChildrens = [...carousel.children];

let isDragging = false, startX, startScrollLeft;

let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

carouselChildrens.slice(-cardPerView).reverse().forEach(listacomentario => {
    carousel.insertAdjacentHTML("afterbegin", listacomentario.outerHTML);
});

carouselChildrens.slice(0, cardPerView).forEach(listacomentario => {
    carousel.insertAdjacentHTML("beforeend", listacomentario.outerHTML);
});

arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id === "esquerda" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return;
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
</script>
