<form method="post" action="verificaLogin.php">
    <ul>
        <li>Login: <input type="text" name="email_login"></li>
        <li>Pass: <input type="password" name="pass_login"></li>
    </ul>
    <button>Entrar</button>
</form>

<?php
    if(isset($_GET['login']) && $_GET['login'] == 'erro')
    {
        echo "Login Errado";
    }
?>
