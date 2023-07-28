<?php
    if(isset($_SESSION['id_Cliente']))
    {
        echo "Ola Sr(a) " .$_SESSION['id_Cliente']. $_SESSION['emailCliente'];
        ?>
        <script type="text/JavaScript">
        document.getElementById("text-email").value = '<?php $_SESSION['emailCliente']; ?>';
        
        </script>
        <?php
    }
    else
    {
        ?>
            <form>
            <ul>
                <li>Login: <input type="text" name="email_login"></li>
                <li>Pass: <input type="password" name="pass_login"></li>
            </ul>
            <button>Entrar</button>
            </form>
        <?php
    }
?>