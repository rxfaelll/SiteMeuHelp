<?php
function getHeader(){
    echo '<header>
                <span class="logo">
                    <img src="img/logo/logo.png" alt="">
                </span>
                <nav class="header-nav">
                    <a href="index">Página inicial</a>
                    <a href="" class="scroll-down-btn">Planos</a>
                    <a href="beneficios">Benefícios</a>
                    <a href="http://meuhelp.com.br/blog">Blog</a>
                </nav>
                <form class="header-search-form">
                    <input type="text" name="search" placeholder="Buscar" class="search-input" autocomplete="off" id="searchInput">
                    <button class="search-btn" id="searchBtn" class="search-btn"><img src="img/icon/search.png" alt=""></button>
                </form>
                
            </header>
            <script src="js/searchQuery.js"></script>';
}


// Código do botão de acesso ao serviço [Removido] <a href="" class="normal-button lightblue-bg">Acesse sua conta</a>
?>