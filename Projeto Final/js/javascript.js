function mostraMenu()
{
    console.log("Entrou");
    if (document.getElementById('item-mobile').style.display == 'none')
    {
        document.getElementById('icon-menu').innerHTML = '<i class="fa-solid fa-x fa-3x"></i>';
        document.getElementById('item-mobile').style.display = 'block';
    }
    else
    {
        document.getElementById('icon-menu').innerHTML = '<i class="fa-solid fa-bars fa-3x"></i>';
        document.getElementById('item-mobile').style.display = 'none';
    }
}

function menuPrincipal()
{
    largura = window.innerWidth;

    if( largura > 850)
    {
        document.getElementById('icon-menu').innerHTML = '<i class="fa-solid fa-bars fa-3x"></i>';
        document.getElementById('item-mobile').style.display = 'none';
    }
}

function  teste(){
    document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#card-carousel', {
          perPage    : 2,
          breakpoints: {
              640: {
                  perPage: 1,
              },
          },
    } ).mount();
  } );
}
