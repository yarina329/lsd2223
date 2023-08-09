
<?php
    include('config/config.php');
   
        $pesquisa = $_POST['pesquisa'];
        $query = "select * from produtos 
        inner join series on series_idSerie = idSerie
        inner join categorias on categorias_idCategoria = idCategoria
        where nome_produto like '%$pesquisa%'
        or nome_serie like '%$pesquisa%'
        or nome_categoria like '%$pesquisa%'";

        $resultado = mysqli_query($ligacao,$query);
        $registo = mysqli_fetch_assoc($resultado);

        $numero_de_users_encontrados = $resultado->num_rows;

        if($numero_de_users_encontrados == 0){

            header('location:Index.php?resul=null');
            
        }
        else if($numero_de_users_encontrados != 0){
            session_start();

            $_SESSION['pesquisa'] = $pesquisa;
            header('location:Index.php?area=resultpesquisa');
        }
?>  