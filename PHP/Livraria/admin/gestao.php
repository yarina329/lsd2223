<?php
    include('../funcoes.php');
    include('../config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="insereLivro.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Titulo Livro </td>
                <td><input type="text" name="titulo"> </td>
            </tr>
            <tr>
                <td>Preco Livro </td>
                <td><input type="text" name="preco"> </td>
            </tr>
            <tr>
                <td>Stock Livro </td>
                <td><input type="text" name="stock"> </td>
            </tr>
            <tr>
                <td>Descricao Livro </td>
                <td><input type="text" name="descricao"> </td>
            </tr>
            <tr>
                <td>Capa Livro </td>
                <td><input type="file" name="capa"> </td>
            </tr>
            <tr>
                <td>Editora </td>
                <td>
                    <select name="editora">
                        <?php
                            $lista_editoras = getEditoras($ligacao);

                            while($linha = mysqli_fetch_assoc($lista_editoras))
                            {
                        ?>
                        <option value="<?php echo $linha['id_editora']?>"><?php echo utf8_encode($linha['nome_editora']);?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
        </table>
    
    <button>
        Guardar
    </button>
</form>
</body>
</html>