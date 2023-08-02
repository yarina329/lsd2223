<?php
    include('config/config.php');

    function getSerie($ligacao)
    {
        $query = "select * from series";

        $resultado = mysqli_query($ligacao,$query);

        return $resultado;
    }

    function getCategoria($ligacao)
    {
        $query = "select * from categorias";

        $resultado = mysqli_query($ligacao,$query);

        return $resultado;
    }
?>


