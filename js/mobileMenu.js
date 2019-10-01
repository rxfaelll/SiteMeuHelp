let mobileMenuBtn = document.querySelector("#mobile-menu-btn");
let toggleMenu = document.querySelector(".header-nav");
let menuBlur = document.querySelector("#menuBlur");

let getUrl = window.location.href;
let scrollBtn = document.querySelector(".planos-btn");

mobileMenuBtn.addEventListener("click", checkbox);

scrollBtn.addEventListener("click", closeMenu);
menuBlur.addEventListener("click", closeMenu);

function checkbox(){
    if (mobileMenuBtn.checked) {
        toggleMenu.classList.add("open-header-nav");
        menuBlur.classList.add("open-menu-blur");

    } else {
        toggleMenu.classList.remove("open-header-nav");
        menuBlur.classList.remove("open-menu-blur");

    }
}

function closeMenu() {
    mobileMenuBtn.checked = false;

    checkbox();
}


//Esconde o botão Planos do header quando não estiver na página principal
if (getUrl != "http://supremeag.com.br/desenvolvimento/MeuHelpSite/") {
    
    scrollBtn.setAttribute("href", "index");
    console.log("oi");    
}
