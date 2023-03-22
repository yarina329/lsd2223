function validaFormulario(){
    alert('entrei');

    //guardar numa variavel o q estiver no nome
nome_inserido = document.getElementById('nome').value;
    //guardar numa variavel o q estiver na morada
morada_inserido = document.getElementById('morada').value;
console.log(nome_inserido);
console.log(morada_inserido);

//alert('Ja li os valores');
    //ver se esta alguma coisa na variavel nome
        //ver se esta alguma coisa na variavel morada
            //submete o formulario
if(nome_inserido != '' && morada_inserido != ''){
    //alert('Dados correctos');
    return true;
}
else {
    document.getElementById('zona_de_erro').innerText = 'Dados incorrectos';
    //alert('DADOS INCORRECTOS!!!');
    return false;
}
    //se estiver alguma coisa no nome e estiver alguma coisa na morada
        //submete

    //senao
        //avisa o utilizador
        //impede a submissao do formulario

}

function validaFormularioMelhor(){

    //reset aos elementos *
    document.getElementById('obrigatorio_nome').style.display = 'none';
    document.getElementById('obrigatorio_morada').style.display = 'none';
    document.getElementById('zona_de_erro').innerText = '';

    //guardar numa variavel o q estiver no nome
    nome_inserido = document.getElementById('nome').value;
    //guardar numa variavel o q estiver na morada
    morada_inserido = document.getElementById('morada').value;

    //se nome vazio
if(nome_inserido ==''){
        //mostra * do nome
    document.getElementById('obrigatorio_nome').style.display = 'block';
}

if(morada_inserido ==''){
    //mostra * do nome
    document.getElementById('obrigatorio_morada').style.display = 'block';
}

if(nome_inserido == '' || morada_inserido == ''){
    document.getElementById('zona_de_erro').innerText = 'Preencha os campos assinalados';
    return false;
}
else {
    return true;
}

}