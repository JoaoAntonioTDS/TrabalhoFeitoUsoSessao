<?php
session_start();

if (isset($_SESSION['contagem'])) {
    session_unset();
    session_destroy();

    header("location: mostrar.php");
exit;

} else{
    $erro = "Contagem já foi apagada";
    header("location: mostrar.php?erro=" . $erro);
    
    exit;
}


