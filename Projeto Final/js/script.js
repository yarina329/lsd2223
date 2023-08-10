
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
