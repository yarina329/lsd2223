<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 PHP</title>
</head>
<body>
    <?php
        echo "Ola Mundo!";

        echo '<br>';
        /*criar variavel */
        $nome = 'Joao';
        $apelido = 'Silva';
        $nome_completo = $nome.' '.$apelido;
        $idade = 30;
        
        echo 'Nome'.' '.$nome_completo;
        /*reconhece como codigo de html */
        echo '<br>';
        echo 'Idade'.' '.$idade;

    ?>
    <br>
    <?php
        /*criacão de um array */
        $lista = [23,45,86,87,96];

        echo 'Lista';
        echo '<br>'
        /*todo o que for variavel deve ter antes $ */
        for($i=0; $i<5; $i++){
            echo $lista[$i];
            echo '<br>';
        }
    ?>
</body>
</html>