<?php 
    include 'php/header.php';
    include 'php/fixedSocialBar.php';
    include 'php/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/busca.css">
    <title>Meu Help</title>
</head>
<body>
    <!-- Header -->
    <?php
        getHeader();
    ?>

    <!-- Fixed social bar -->
    <?php
        getFixedSocialBar();
    ?>

<img src="img/fundos/fundoHeaderSec2.png" alt="" class="header-bg">

    <main>
        <div class="not-found-msg">
            <h1>Não encontramos nada relacionado a sua busca, tente buscar por algo diferente
                ou <a href="index.php">clique aqui para voltar à página inicial</a>
            </h1>
        </div>        
    </main>

    <!-- Footer -->
    <?php 
        getFooter();
    ?>
</body>
</html>