<header>
    <div class="icons">
        <div class="heart"><a href="Index.php?area=favorito"><i class="fa-solid fa-heart"></i></a></div>
        <div class="cart"><a href="Index.php?area=carrinho"><i class="fa-solid fa-cart-shopping"></i></a></div>
        <?php
            if(isset($_SESSION['id_Cliente']))
                {
                    if($_SESSION['tipoclientes_idTipoCliente'] == 2)
                    {
                        ?>
                        <div class="logout"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></div>
                        <div id="text-email"><a href="Index2.php?area=geralcliente"><?php echo $_SESSION['emailCliente']; ?></a></div>
                    <?php
                    }      
                    else {
                        ?>
                            <div class="logout"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></div>
                            <div id="text-email"><a href="Index2.php?area=addprod"><?php echo $_SESSION['emailCliente']; ?></a></div>
                        <?php
                    }         
            }
            else
            {
                ?>
                <div class="login"><a href="Index2.php"><i class="fa-solid fa-user"></i></a></div>
                <?php
            }
            ?>
    </div>
</header>

