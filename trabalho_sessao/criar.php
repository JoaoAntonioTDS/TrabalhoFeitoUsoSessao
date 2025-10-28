<?php
session_start();

if (isset($_SESSION['contagem'])) {
    $erro = "Contagem já foi criada";
    
    header("location: mostrar.php?erro=" . $erro);
exit;

}else{

    $_SESSION['contagem'] = 0;
    header("location: mostrar.php");
    
exit;
}


