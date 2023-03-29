document.querySelector('#email').addEventListener('focus', mostraConteudoInput);
document.querySelector('#email').addEventListener('blur', escondeConteudoInput);
//utilizar os ids dos inputs


function mostraConteudoInput()
{
    //alert('Entrei no add event listener');
    console.log('Entrei no add event listener');
    
}

function escondeConteudoInput()
{
    //alert('Entrei no add event listener PARA ESCONDER');
    console.log('Entrei no add event listener PARA ESCONDER');
    console.log(this.value);


}
