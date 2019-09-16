<?php
function getHeader(){
    echo '<header>
                <span class="logo">
                    <img src="img/logo/logo.png" alt="">
                </span>
                <nav class="header-nav">
                    <a href="">Página inicial</a>
                    <a href="">Planos</a>
                    <a href="">Saiba mais</a>
                    <a href="beneficios.php">Benefícios</a>
                    <a href="">Serviços</a>
                    <a href="">Ajuda</a>
                </nav>
                <form class="header-search-form">
                    <input type="text" name="search" placeholder="buscar" class="search-input" autocomplete="off" id="searchInput">
                    <button class="search-btn" id="searchBtn" class="search-btn"><img src="img/icon/search.png" alt=""></button>
                </form>
                <a href="" class="normal-button lightblue-bg">Acesse sua conta</a>
            </header>
            <script src="js/searchQuery.js"></script>';
}
?>