<div class="conteudo-lista">
<?php
    
    $query_a_executar = "select * from livros;";
    $resultado = mysqli_query($ligacao,$query_a_executar);

    //print_r($resultado);

    while($linha = mysqli_fetch_assoc($resultado))
    {
    //print_r($linha);
?>

    <div class="detalhe-livro">
        <div class="capa">
            <img src="imagens/<?php echo $linha['capa_livro'];?>" alt="">
        </div>
        <div class="informacao">
            <h2>

                <!--utf8_encode() -> serve para que os caracteres estejam bem escritos -->
                <?php echo utf8_encode($linha['titulo_livro']);?>
            </h2>
            <p>
                <?php echo utf8_encode($linha['descricao_livro']);?>
            </p>
            <p>
                <?php echo utf8_encode($linha['preco_livro']);?>€
            </p>
        </div>
    </div>

<?php
    }
?>
</div>