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

function validaFormularioMelhor(){

    document.getElementById('obrigatorio_email').style.display = 'none';
    document.getElementById('obrigatorio_password').style.display = 'none';
    document.getElementById('erro').innerText = '';

    email_inserido = document.getElementById('email').value;
    password_inserido = document.getElementById('password').value;

    if(email_inserido ==''){
        document.getElementById('obrigatorio_email').style.display = 'block';
    }
    
    if(password_inserido ==''){
        document.getElementById('obrigatorio_password').style.display = 'block';
    }
    
    if(email_inserido == '' || password_inserido == ''){
        document.getElementById('erro').innerText = 'Preencha os campos assinalados';
        return false;
    }
    else {
        return true;
    }

}
