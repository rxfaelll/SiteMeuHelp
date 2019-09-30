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
    <link rel="stylesheet" href="css/beneficios.css">
    <link rel="stylesheet" href="css/mobile/beneficiosMobile.css">
    <link rel="stylesheet" href="css/mobile/mainMobile.css">
    <title>Beneficios - Meu Help</title>
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

    <img src="img/fundos/fundoHeaderSec1.png" alt="" class="header-bg">

    <main>
        <h1>Beneficios</h1>
        <div class="container-content">
            <div class="container-beneficios">
                <img src="img/icon/iconCartao.png" alt="">
                <h1>Cartão de crédito pré-pago</h1>
                <p>Agora ficou fácil controlar seus gastos, agora você pode
                    ter um cartão de um jeito simples e rápido
                </p>
            </div>

            <div class="container-beneficios">
                <img src="img/icon/iconCoracao.png" alt="">
                <h1>Consultas e exames a preços populares</h1>
                <p>Tenha acesso a uma ampla rede de clínicas a laboratórios, com muita economia e conforto</p>
            </div>

            <div class="container-beneficios">
                <img src="img/icon/iconMan.png" alt="">
                <h1>Encanador</h1>
                <p>Incidentes hidráulicos não tem hora para acontecer.
                    Então, peça um Help. Enviaremos um encanador para te
                    ajudar com reparos de emêrgencia*. *Consulte os reparos contemplados
                </p>
            </div>

            <div class="container-beneficios">
                <img src="img/icon/iconAtendente.png" alt="">
                <h1>Orientação médica por telefone</h1>
                <p>Fale ao telefone com profissionais 
                    da saúde e tire suas dúvidas do 
                    cotidiano sobre saúde, a qualquer hora do dia ou da noite
                </p>
            </div>

            <div class="container-beneficios">
                <img src="img/icon/iconTel.png" alt="">
                <h1>Central 24 horas</h1>
                <p>Profissionais preparados para dar o Help que você precisa,
                    seja para agendar uma consulta, solicitar um guincho ou para tirar dúvidas sobre seu contrato
                </p>
            </div>

            <div class="container-beneficios">
                <img src="img/icon/iconAmbulancia.png" alt="">
                <h1>Ambulância em caso de emergência</h1>
                <p>Para aquelas situações mais sensíveis, de urgência ou 
                    emergências médicas, uma ambulância tripulada por equipe
                    especializada, com recursos de última geração realizará o 
                    atendimento no local da ocorrência, exceto am vias públicas. *Prestaçãode serviços restrita à área de abrangência.
                </p>
            </div>

            <div class="container-beneficios">
                <img src="img/icon/iconChave.png" alt="">
                <h1>Chaveiro automotivo</h1>
                <p>Incidentes não tem hora para acontecer. Então, peça um Help.
                    Enviaremos um chaveiro para te ajudar.* *Consulte os serviços 
                    disponíveis. Serviços executados somente ao veículo cadastrado
                </p>
            </div>

            <div class="container-beneficios">
                <img src="img/icon/iconGuincho.png" alt="">
                <h1>Guincho</h1>
                <p>Ligue em nossa central e solicite o apoio. Vamos ajudar a cuidar do seu veículo.</p>
            </div>
        </div>

        <div class="beneficios-btn-container">
            <a href="" class="normal-button darkblue-bg">Planos</a>
            <a href="" class="normal-button yellow-bg">Contrate já</a>
        </div>

    </main>

    <!-- Footer -->
    <?php 
        getFooter();
    ?>

    <script src="js/mobileMenu.js"></script>
</body>
</html>