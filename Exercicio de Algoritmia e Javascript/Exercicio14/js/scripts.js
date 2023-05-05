$(document).ready(function(){
    $('.content').load('home.html');
});

function carregaPagina(destino){

switch (destino){
    case 'pagina 1' : $('.content').load('home.html'); break
    case 'pagina 2' : $('.content').load('pagina2.html'); break
    case 'pagina 3' : $('.content').load('pagina3.html'); break
    case 'pagina 4' : $('.content').load('pagina4.html'); break
}
    $('.content').load('home.html');
    $('.content').load('pagina2.html');
    $('.content').load('pagina3.html');
    $('.content').load('pagina4.html');
}