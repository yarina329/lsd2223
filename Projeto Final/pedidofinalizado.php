   <?php
    echo('entrei');
    include('config/config.php');
    require_once 'email/PHPMailer-master/src/Exception.php';
    require_once 'email/PHPMailer-master/src/PHPMailer.php';
    require_once 'email/PHPMailer-master/src/SMTP.php';


    session_start();
    if(isset($_SESSION['carrinho']))
    {
        if(isset($_SESSION['id_Cliente']))
        {
            $idCliente = $_SESSION['id_Cliente'];
            $total = $_SESSION['total'];

            foreach($_SESSION['carrinho'] as $id)
            {
                $query = "insert into carrinhos
                (quantidad_carrinho, total_carrinho, clientes_idCliente, produtos_idProduto, ativo)
                values
                (1, ".$total.",
                $idCliente,
                $id,
                1
                )";
                
                $resultado = mysqli_query($ligacao,$query);
            }

            $query_a_executar = "select * from clientes
                where idCliente = ".$idCliente;
            
            $resultado = mysqli_query($ligacao,$query_a_executar);

            $lista_cliente = mysqli_fetch_assoc($resultado);

            $_SESSION['carrinho'] = [];

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'yarina_2016@hotmail.com';
            $mail->Password = 'Ola123+.';
            $mail->Port = 587;

            $mail->setFrom('yarina_2016@hotmail.com', 'DYAnim');  // Remetente
            $mail->addAddress('teste@hotmail.com', 'Teste');  // Destinatário

            // Conteúdo do email
            $mail->isHTML(true);  // Permite conteúdo HTML
            $mail->Subject = 'Pedido Finalizado | DYAnim';
            $mail->Body    = 'Agradecemos pela confiança e compra dos nosso produtos!!!
            <br>O pagamento pode ser feito via MBWAY ao seguinte número: 912 934 657.
            <br>Assim, que sejá feito o pagamento entraremos em contacto consigo.
            <br>Muito Obrigada.
            <br>
            <br>Atentamente,
            <br>
            <br>DYAnim';
            $mail->AltBody = 'Uma vez mais obrigada pela compra';

            // Envio do email
            if(!$mail->send()) {
                echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
            } else {
                header('location:Index.php?area=mensagem');
                echo 'Email enviado com sucesso!';
            }

        }
        
    }
?>
