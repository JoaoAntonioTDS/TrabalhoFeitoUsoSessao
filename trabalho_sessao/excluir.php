<?php
session_start();

if (isset($_SESSION['contagem'])) {
    session_unset();
    session_destroy();
}

header("location: mostrar.php");
    
exit;
