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
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
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

    <main>

        <!-- Landpage -->
        <img src="img/fundos/fundoMain.png" alt="" class="bg-main">
        <div class="container-landpage">
            <div class="image-container">
                <img src="img/imagens/img1.png" alt="">
            </div>            
            <div class="landpage-content">
                <h1>O <strong>Meu<span>Help</span></strong> é um cartão de crédito  pré-pago com multibenefícios,
                    que  oferece a você muita economia, acesso a serviços de assistências e saúde 24 horas.
                </h1>
                <a href="" class="normal-button lightblue-bg">Quero agora</a>
            </div>
        </div>
        
        <!-- Second content -->
        <div class="container-second-content">
            <div>
                <h1>Sua conta digital, com serviços de <span>saúde e assistência 24 horas</span></h1>
                <h2>O <strong>Meu<span>Help</span></strong> é uma solução multibenefícios, também com a função crédito pré-pago,
                    que oferece ao associado muita economia,
                    acesso a serviços de saúde e assistência 24 horas.
                </h2>
                <a href="" class="normal-button yellow-bg">Saiba mais</a>
            </div>
            <div class="image-container">
                <img src="img/imagens/img2.png" alt="Mulher feliz com o cartão pré-pago Meu Help">
            </div>
        </div>

        <!-- Planos -->
        <div class="container-planos">

            <!-- Card Planos -->
            <h1>Planos Meu Help</h1>
            <div class="planos-content">
                <!-- Card 1 -->
                <div class="card card-plano">
                    <div>
                        <h2>Individual</h2>
                        <img src="img/icon/iconPlano1.png" alt="">  
                    </div>
                    <div>
                        <br>
                        <h1>39,90</h1>
                        <h6>por mês</h6>
                        <br>
                    </div>
                    <div class="card-btn">
                        <a href="" class="normal-button darkblue-bg">Saiba mais</a>
                        <a href="" class="normal-button yellow-bg">Contrate Já</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card card-plano">
                    <div>
                        <h2>Familiar</h2>
                        <img src="img/icon/iconPlano2.png" alt="">  
                    </div>
                    <div>
                        <br>
                        <h1>39,90</h1>
                        <h6>por mês</h6>
                        <p>R$29,90 adicionais por pessoa na residência</p>
                    </div>
                    <div class="card-btn">
                        <a href="" class="normal-button darkblue-bg">Saiba mais</a>
                        <a href="" class="normal-button yellow-bg">Contrate Já</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card card-plano">
                    <div>
                        <h2>Para empresas</h2>
                        <img src="img/icon/iconPlano3.png" alt="">  
                    </div>
                    <div>
                        <p>A partir de</p>
                        <h1>7,99</h1>
                        <h6>por mês</h6>
                        <br>
                    </div>
                    <div class="card-btn">
                        <a href="" class="normal-button darkblue-bg">Saiba mais</a>
                        <a href="" class="normal-button yellow-bg">Contrate Já</a>
                    </div>
                </div>
            </div>

            <!-- Card Clientes -->
            <h1>Já é nosso cliente?</h1>
            <div class="clientes-content">

                <!-- Card 1 -->
                <div class="card yellow-bg card-cliente">
                    <h1>Ative seu cartão</h1>
                    <p>Agora é hora de cadastrar sua senha de acesso e 
                        consultar seu saldo, extratos de utilização do 
                        cartão  e consultar toda a Rede Credenciada. 
                        Ligue  e cadastre sua senha.
                    </p>
                    <p class="telefone">Ligue (11) 4780-0700</p>
                </div>

                <!-- Card 2 -->
                <div class="card red-bg card-cliente">
                    <h1>Área de vantagens</h1>
                    <p>Acesse a área de vantagens de seu estabelecimento, 
                        e realize a divulgação de produtos e promoções.
                    </p>
                    <a href="" class="normal-button yellow-bg">Acesse já</a>
                </div>

                <!-- Card 3 -->
                <div class="card lightblue-bg card-cliente">
                    <h1>Ative seu cartão</h1>
                    <p>Então, cadastre seu cartão agora mesmo, e depois, 
                        ligue para a central de relacionamento e cadastre
                        sua nova senha 
                    </p>
                    <a href="" class="normal-button yellow-bg">Acesse Já</a>
                </div>
            </div>
        </div>

        <!-- <div class="container-access-service red-bg">
            <h1>Se você já é nosso cliente, acesse e agende nossos serviços</h1>
            <a href="" class="normal-button darkblue-bg">Acesso aos serviços</a>
        </div> -->

        <!-- Slider Parceiros -->
        <div id="sliderParceiros">
        <a href="parceiros">
            <div>
                <img src="img/imagens/burgerkingLogo.png" alt="">
                <img src="img/imagens/cinemarkLogo.png" alt="">      
                <img src="img/imagens/bluefitLogo.png" alt="">
            </div>
        </a>

        <a href="parceiros">
            <div>
                <img src="img/imagens/magazineLogo.png" alt="">
                <img src="img/imagens/sonyLogo.png" alt="">
                <img src="img/imagens/netshoesLogo.png" alt="">
            </div>
        </a>

        </div>

        <!-- Formulário -->

        <div class="container-form">
            <h1>Contato, dúvidas ou comentários</h1>
            <p>Nossa equipe de atendimento está pronta para falar
                comvocê. Utilize o formulário abaixo e mande sua
                mensagem. se preferir, ligue para nossa central
                de atendimento.
            </p>
        </div>

        <!-- Slider Comentários -->
        <div id="sliderComentario">
            <div class="container-comentario">
                <!-- Comentário 1 -->
                <div class="comentario">
                    <div>
                        <img src="" alt="" class="comentario-img">
                    </div>
                    <div>
                        <span class="comentario-nome">Juliana Ferreira</span>
                        <span class="comentario-texto">Não vivo mais sem esse cartão.</span>
                    </div>
                </div>

                <!-- Comentário 2 -->
                <div class="comentario">
                    <div>
                        <img src="" alt="" class="comentario-img">
                    </div>
                    <div>
                        <span class="comentario-nome">Wilson Gomes</span>
                        <span class="comentario-texto">Serviços muito bem prestados.</span>
                    </div>
                </div>
            </div>
            <div class="container-comentario">
                <!-- Comentário 2 -->
                <div class="comentario">
                    <div>
                        <img src="" alt="" class="comentario-img">
                    </div>
                    <div>
                        <span class="comentario-nome">Juliana Ferreira</span>
                        <span class="comentario-texto">Não vivo mais sem esse cartão.</span>
                    </div>
                </div>

                <!-- Comentário 2 -->
                <div class="comentario">
                    <div>
                        <img src="" alt="" class="comentario-img">
                    </div>
                    <div>
                        <span class="comentario-nome">Wilson Gomes</span>
                        <span class="comentario-texto">Serviços muito bem prestados.</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php 
        getFooter();
    ?>

    <script src="jquery/jquery.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/sliders.js"></script>
    <script src="js/scrollHeaderBtn.js"></script>

</body>
</html>