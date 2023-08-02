<div class="PrincipalImg">
        <div class="cx">
            <div class="cx-regist">
            <div class="icon-voltar">
                <a href="Index2.php"><i class="fa-solid fa-left-long"></i></a>
            </div>
                <form onsubmit="return validaMelhor()" method="post" action="registarCliente.php">
                    <ul>
                        <li><input type="text" id="nome" name="nome" placeholder="Nome" class="tamanho"><input type="text" id="tlm" name="tlm" placeholder="Telemóvel" class="tamanho"><span id="obrigatorio_tlm">*</span></li>
                        <li><input type="text" id="email" name="email" placeholder="Email" class="tamanhoPwd"><span id="obrigatorio_email">*</span></li>
                        <li><input type="password" id="password" name="password" placeholder="Password"><span id="obrigatorio_password">*</span></li>
                        <li><input type="text" id="morada" name="morada" placeholder="Morada" class="tamanhoPwd"><span id="obrigatorio_morada">*</span></li>
                        <li><input type="text" id="codigop" name="codigop" placeholder="Codigo Postal" class="tamanhoPwd"><span id="obrigatorio_cod">*</span></li>
                    </ul>
                    <div class="login-button">
                        <button><b>REGISTO</b></button>
                    </div>
                <div id="erro">
                </div>
                </form>
            </div>
        </div>
    </div>