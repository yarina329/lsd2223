<?php

    include('config/config.php');

    $nomeProduto = $_POST['produto'];
    $nomeSerie = $_POST['serie'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $stock = $_POST['stock'];
    $sugestao = $_POST['sugest'];
    $ativoProd = $_POST['ativoprod'];
    $precoDesc = $_POST['precodes'];
    $ativoDesc = $_POST['ativodesc'];

    $foto = $_FILES['fotoP'];
    $origem = $foto['tmp_name'];

    $nome_do_ficheiro = uniqid().".jpg";
    $destino = "../imagens/Produtos".$nome_do_ficheiro;

    move_uploaded_file($origem, $destino);

    $query_inserir = "insert into produtos
    (nome_produto, preco_produto, stock, sugestao_produto, 
    desconto_produto, foto_produto, ativo_produto, ativo_desconto, 
    categorias_idCategoria, series_idSerie) values
    ('".$nomeProduto."',
    '".$preco."',
    ".$stock.",
    '".$sugestao."',
    '".$precoDesc."',
    '".$nome_do_ficheiro."',
     ".$ativoProd.",
     ".$ativoDesc.",
     ".$categoria.",
     ".$nomeSerie."
     )";

    
    $resultaddo = mysqli_query($ligacao, $query_inserir);

    header('location:Index2.php?area=addprod&status=ok');
?>
