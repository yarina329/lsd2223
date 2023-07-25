<?php
    function getProdutos($ligacao, $idProduto)
    {
        $query = "select * from produtos
        where idProduto = $idProduto";

        $resultado = mysqli_query($ligacao,$query);

        $lista_produtos = [];

        while ($linha_produtos = mysqli_fetch_assoc($resultado))
        {
            array_push($lista_produtos, $linha_produtos['nome_produto']);
        }

        return $lista_produtos;
    }

    function validaFormularioMelhor(){

        //reset aos elementos *
        document.getElementById('obrigatorio_email').style.display = 'none';
        document.getElementById('obrigatorio_password').style.display = 'none';
        document.getElementById('erro').innerText = '';
    
        //guardar numa variavel o q estiver no nome
        email_inserido = document.getElementById('email').value;
        //guardar numa variavel o q estiver na morada
        password_inserido = document.getElementById('password').value;
    
        //se nome vazio
    if(nome_inserido ==''){
            //mostra * do nome
        document.getElementById('obrigatorio_email').style.display = 'block';
    }
    
    if(password_inserido ==''){
        //mostra * do nome
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

?>

