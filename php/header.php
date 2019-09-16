<?php
function getHeader(){
    echo '<header>
                <span class="logo">
                    <img src="img/logo/logo.png" alt="">
                </span>
                <nav class="header-nav">
                    <a href="https://meuhelp.com.br">Página inicial</a>
                    <a href="https://meuhelp.com.br">Planos</a>
                    <a href="https://meuhelp.com.br">Saiba mais</a>
                    <a href="https://meuhelp.com.br/beneficios.php">Benefícios</a>
                    <a href="https://meuhelp.com.br">Serviços</a>
                    <a href="https://meuhelp.com.br">Ajuda</a>
                </nav>
                <form action="" class="header-search-form">
                    <input type="text" name="search" placeholder="buscar" class="search-input" autocomplete="off">
                    <button class="search-btn" id="searchBtn" class="search-btn"><img src="img/icon/search.png" alt=""></button>
                </form>
                <a href="" class="normal-button lightblue-bg">Acesse sua conta</a>
            </header>';
}
?>