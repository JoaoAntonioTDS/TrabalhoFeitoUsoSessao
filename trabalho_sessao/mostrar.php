<?php
session_start();
$erro = isset($_GET['erro']) ? $_GET['erro'] : '';


?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contador exercícios academia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <h2>Contador exercícios academia</h2>

        <div class="mt-4">
            <a class="btn btn-success" href="./criar.php">
                Criar contagem de exercícios</a>

            <a class="btn btn-primary" href="./alterar.php">
                Aumentar contagem do exercício</a>

            <a class="btn btn-danger" href="./excluir.php">
                Apagar contagem</a>
        </div>

        <div class="mt-5">
            <span style="font-weight: bold;">Contagem:</span>
            <span>
            <?php
            if (isset($_SESSION['contagem'])) {
                echo $_SESSION['contagem'];
            } else {
                echo "Não tem contagem";
                } ?>
            </span>
        </div>
        
   <?php
   if ($erro != '') {
       echo '<div class="alert alert-danger mt-3">' . htmlspecialchars($erro) . '</div>';
   }
   ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>