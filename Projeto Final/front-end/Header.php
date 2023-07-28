<?php
    include('front-end/miniHeader.php');
?>
<div class="row menu" onresize="menuPrincipal()">
    <div class="col-6 logo">
        <a href="Index.php"><img src="imagens/logo.png" alt="Logotipo"></a>
    </div>
    <nav class="col-4 menu-mobile">
        <span id="icon-menu" onclick="mostraMenu()">
            <i class="fa-solid fa-bars fa-3x"></i>
        </span>
        
        <ul id="item-mobile">
            <li>
                <a href="Index.php?area=roupa">ROUPA</a>
            </li>
            <li>
                <a href="Index.php?area=mantas">MANTAS</a>
            </li>
            <li>
                <a href="Index.php?area=figuras">FIGURAS</a>
            </li>
            <li>
            <a href="Index.php?area=acessorios">ACESSÓRIOS</a>
            </li>
            <li>
            <a href="Index.php?area=outros">OUTROS</a>
            </li>
        </ul>
    </nav>


    <div class="col-4 logo-principal"><a href="Index.php"><img src="imagens/logo.png" alt="Logotipo"></a></div>
    <div class="col-8 efei-col">
        <nav>
            <ul class="menu-principal">
                <li>
                    <a href="Index.php?area=roupa">ROUPA</a>
                </li>
                <li>
                    <a href="Index.php?area=mantas">MANTAS</a>
                </li>
                <li>
                    <a href="Index.php?area=figuras">FIGURAS</a>
                </li>
                <li>
                    <a href="Index.php?area=acessorios">ACESSÓRIOS</a>
                </li>
                <li>
                    <a href="Index.php?area=outros">OUTROS</a>
                </li>
            </ul> 
        </nav>
        
    </div>
</div>


