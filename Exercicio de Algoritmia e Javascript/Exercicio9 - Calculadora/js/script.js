function escolheNumero(numero_escolhido){
    //alert(numero_escolhido);

    //ir buscar o operador
    operador = document.querySelector("input[name=operador]").value;

    if(operador != '')
    {
        numero_antigo = document.querySelector("input[name=parcela2]").value;
        numero_novo = numero_antigo + numero_escolhido;
        document.querySelector("input[name=parcela2]").value = numero_novo;
    }
    else{
        numero_antigo = document.querySelector("input[name=parcela1]").value;
        numero_novo = numero_antigo + numero_escolhido;
        document.querySelector("input[name=parcela1]").value = numero_novo;
    }

    document.querySelector('.resultado').innerText += numero_escolhido;

}

function atribuiOperador(operador_escolhido){
    //alert(operador_escolhido);

    document.querySelector("input[name=operador]").value = operador_escolhido;
    document.querySelector('.resultado').innerText += operador_escolhido;

}

function fazConta(){
    //ir buscar a parcela1
    p1 = document.querySelector("input[name=parcela1]").value;
    //ir buscar a parcela2
    p2 = document.querySelector("input[name=parcela2]").value;
    //ir buscar o operador
    operador = document.querySelector("input[name=operador]").value;

    //converter os numeros para inteiros
    p1 = parseFloat(p1);
    p2 = parseFloat(p2);

    switch(operador)
    {
        case '+': {resultado = p1 + p2} break;
        case '-': {resultado = p1 - p2} break;
        case '*': {resultado = p1 * p2} break;
        case '/': {resultado = p1 / p2}
    }

    document.querySelector(".resultado").innerText += " = " + resultado;

    //aumentar o calculo depois de ja ter calculado
    document.querySelector("input[name=parcela1]").value = resultado;
    document.querySelector("input[name=parcela2]").value = "";
}

function apagar(){
    
    document.querySelector("input[name=parcela1]").value = "";
    document.querySelector("input[name=parcela2]").value = "";
    document.querySelector("input[name=operador]").value = "";
    document.querySelector('.resultado').innerText = "";
}
