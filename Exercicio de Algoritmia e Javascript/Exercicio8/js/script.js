function mostraResultado()
{
    console.log('entrei');

    //ir buscar a lista inserida
    lista = document.getElementById('lista').value;
    //lista = document.querySelector('input[name="lista"]').value;

    //ir buscar o numero a pesquisar
    numero = document.getElementById('numero').value;

    //console.log(num);
    //console.log(nume);

    //converter a string recebida para array
    listaConvertida = lista.split(',');
    console.log(listaConvertida);

    tantoFaz = listaConvertida.length;
    numero_encontrado = 0;
    
    //Primeira solucao
    /*
    for ( i = 0; i < tantoFaz; i++)
    {
        numeroLido = listaConvertida[i];

        if (numeroLido == numero)
        {
            numero_encontrado ++;
        }
    }

    if(numero_encontrado >= 1)
    {
        document.getElementById('resultado').innerText = "O número esta na lista";
    }
    else
    {
       document.getElementById('resultado').innerText = "O número não esta na lista"; 
    }
    */
    
    //Segunda Solucao
    i=0;
    while(numero_encontrado == 0 && i < tantoFaz)
    {
        numeroLido = listaConvertida[i];

        if(numeroLido == numero)
        {
            numero_encontrado++;
        }
        console.log(i);
        i++;
    }

    if(numero_encontrado >= 1)
    {
        document.getElementById('resultado').innerText = "O número esta na lista";
    }
    else
    {
       document.getElementById('resultado').innerText = "O número não esta na lista"; 
    }
}