<?php
    $titulo = $_POST['titulo'];
    $preco = $_POST['preco'];
    $stock = $_POST['stock'];
    $descricao = $_POST['descricao'];
    $editora = $_POST['editora'];

    $capa = $_FILES['capa'];

    print_r($capa);
    $origem = $capa['tmp_name'];

    //$nome_unico = uniqid();

    //uniqid() -> gera os nomes dos ficheiros
    //$nome_do_ficheiro = $nome_unico.".jpg";
    $nome_do_ficheiro = uniqid().".jpg";
    $destino = "../imagens/".$nome_do_ficheiro;

    //tpc -> ficar com a extensão de origem
    //funcao explode();

    move_uploaded_file($origem, $destino);
?>
