    <div class="PrincipalImg">
        <div class="cx">
            <div class="cx-login">
            <div class="icon-voltar">
                <a href="Index.php"><i class="fa-solid fa-left-long"></i></a>
            </div>
                <form onsubmit="return validaFormularioMelhor()" method="post" action="verificarLogin.php">
                    <ul>
                        <li><input type="text" id="email" name="emailL" placeholder="Email"><span id="obrigatorio_email">*</span></li>
                        <li><input type="password" id="password" name="passwordL" placeholder="Password"><span id="obrigatorio_password">*</span></li>
                    </ul>
                    <div class="login-button">
                        <button><b>LOGIN</b></button>
                        <button onclick="window.location.href='back-end/Index2.php?area=registo';"><b>REGISTO</b></button>
                    </div>
                <div id="erro">
                </div>
                </form>
            </div>
        </div>
    </div>
<?php
    if(isset($_GET['login']) && $_GET['login'] == 'erro')
    {
        ?>
        <script type="text/JavaScript">
        document.getElementById("erro").innerHTML = 'Email ou password incorrectas!!!!';
        
        </script>
        <?php
    }
?>