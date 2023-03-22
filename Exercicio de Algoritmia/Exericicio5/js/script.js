function verificarIdade(){

    /*
    ano = document.getElementById('idade').value;
    idade = 2023 - ano;
    alert('idade')

    //devolve 


    if(idade < 18){
        document.getElementById('erros').innerText = 'idade insuficiente';
        return false;
    }
    else{
        return true;
    }

    */

    idade = document.getElementById('idade').value;
    
    if(idade < 18 ){
        alert('Impossivel continuar !!!')
        return false
    }
    else{
        return true;
    }


    /*dataNasc = document.getElementById('datanascimento').value;
    var data_nasc_convert = dataNasc.split('/');
     */
}