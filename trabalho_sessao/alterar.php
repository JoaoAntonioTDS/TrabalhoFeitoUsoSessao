<?php
session_start();
if (isset($_SESSION['contagem'])) {
    $_SESSION['contagem']++;
    header("location: mostrar.php");
    
exit;

}else{

    $erro = "Contagem ainda não foi criada";
    header("location: mostrar.php?erro=" . $erro);

exit;
} 

