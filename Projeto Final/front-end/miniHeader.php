<header>
    <div class="icons">
        <div class="heart"><i class="fa-solid fa-heart"></i></div>
        <div class="cart"><i class="fa-solid fa-cart-shopping"></i></div>
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

