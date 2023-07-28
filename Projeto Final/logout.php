<?php
session_start();
session_destroy();
 echo ('entrei');
    header('Location:Index.php');

?>