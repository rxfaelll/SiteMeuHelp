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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/parceiros.css">
    <title>Parceiros - Meu Help</title>
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
        <h1>Parceiros</h1>
    
        <div class="container-parceiros">
            <div class="parceiros">
                <img src="img/imagens/cinemarkLogo.png" alt="">
                <ul>
                    <li>Descontos em ingressos</li>
                    <li>Descontos em combos</li>
                </ul>
            </div>

            <div class="parceiros">
                <img src="img/imagens/netshoesLogo.png" alt="">
                <ul>
                    <li>Descontos em produtos</li>
                </ul>
            </div>

            <div class="parceiros">
                <img src="img/imagens/sonyLogo.png" alt="">
                <ul>
                    <li>Descontos em eletronicos</li>
                </ul>
            </div>
        </div>

        <div class="container-parceiros">
            <div class="parceiros">
                <img src="img/imagens/magazineLogo.png" alt="">
                <ul>
                    <li>Descontos em produtos</li>
                </ul>
            </div>
            <div class="parceiros">
                <img src="img/imagens/bluefitLogo.png" alt="">
                <ul>
                    <li>Planos especiais</li>
                    <li>Pagamentos com cartão MeuHelp</li>
                </ul>
            </div>
            <div class="parceiros">
                <img src="img/imagens/burgerkingLogo.png" alt="">
                <ul>
                    <li>Descontos em combos</li>
                </ul>
            </div>
        </div>
    </main>

    <div class="container-bottom-img">
        <img src="img/imagens/img3.png" alt="">
    </div>
    

    <!-- Footer -->
    <?php 
        getFooter();
    ?>
</body>
</html>