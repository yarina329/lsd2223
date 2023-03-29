function realcaElemento(elemento)
{
    console.log('Entrei no realça');
    document.getElementById(elemento).style.background = 'orange';
}

function repoeElemento(elemento)
{
    console.log('Entrei no realça');
    document.getElementById(elemento).style.background = 'none';
    
    valor_inserido = document.getElementById(elemento).value;

    /*
    if (valor_inserido == '')
    {
        zona_de_erro = document.querySelector('.mensagem-aviso-nome');
        zona_de_erro.innerText = "Preencher aqui o nome";
    }  
    else
    {
        zona_de_erro = document.querySelector('.mensagem-aviso-nome');
        zona_de_erro.innerText = "";
    }  */

    switch(elemento)
    {
        case 'nome' :
        {
            zona_de_erro = document.querySelector('.mensagem-aviso-nome');   
            if (valor_inserido == '')
            {
                //zona_de_erro = document.querySelector('.mensagem-aviso-nome');
                zona_de_erro.innerText = "Preencher aqui o nome";
            }  
            else
            {//zona_de_erro = document.querySelector('.mensagem-aviso-nome');
                zona_de_erro.innerText = "";
            } 
            
        } 
        break;

        case 'email' :
        {
            zona_de_erro = document.querySelector('.mensagem-aviso-email');
            if (valor_inserido == '')
            {
                //zona_de_erro = document.querySelector('.mensagem-aviso-nome');
                zona_de_erro.innerText = "Preencher aqui o email";
            }  
            else
            {
                //zona_de_erro = document.querySelector('.mensagem-aviso-nome');
                zona_de_erro.innerText = "";
            } 

        } 
        break;

        case 'morada' :
        {
            zona_de_erro = document.querySelector('.mensagem-aviso-morada');
            if (valor_inserido == '')
            {
                //zona_de_erro = document.querySelector('.mensagem-aviso-nome');
                zona_de_erro.innerText = "Preencher aqui o morada";
            }  
            else
            {
                //zona_de_erro = document.querySelector('.mensagem-aviso-nome');
                zona_de_erro.innerText = "";
            } 
        }
    }
}