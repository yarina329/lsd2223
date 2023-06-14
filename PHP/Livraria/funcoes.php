<?php
    function getAutores($ligacao, $id_livro)
    {
        $query = "select * from livros
        inner join livros_has_autores on id_livro = fk_id_livro
        inner join autores on fk_id_autor = id_autor
        where id_livro = $id_livro";

        $resultado = mysqli_query($ligacao,$query);

        $lista_autores = [];

        while ($linha = mysqli_fetch_assoc($resultado))
        {
            array_push($lista_autores, $linha['nome_autor']);
        }

        return $lista_autores;
    }
?>