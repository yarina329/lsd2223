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

    function direccionarPagina()
    {
        
    }

?>

