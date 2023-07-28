<header>
    <div class="icons">
        <div class="heart"><i class="fa-solid fa-heart"></i></div>
        <div class="cart"><i class="fa-solid fa-cart-shopping"></i></div>
        <?php
            if(isset($_SESSION['id_Cliente']))
                {
                ?>
                
                    <div class="logout"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></div>
                    <div id="text-email"><?php echo $_SESSION['emailCliente']; ?></div>
                <?php
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

