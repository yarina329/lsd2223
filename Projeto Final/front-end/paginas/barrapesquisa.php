<form action="pesquisa.php" method="post">
    <div class="barra-pesquisa">
        <input id="pesquisa" name="pesquisa" type="text" placeholder="Pesquisa...">
        <button><i class="fa-solid fa-magnifying-glass"></i></button>           
</div>
</form>

<?php
    if(isset($_GET['resul']) && $_GET['resul'] == 'null')
    {
        ?>
            <script type="text/JavaScript">
                document.getElementById("pesquisa").value = 'Nenhum resultado encontrado';
            </script>
        <?php
    }
?>