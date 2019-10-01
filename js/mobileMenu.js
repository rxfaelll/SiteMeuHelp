let mobileMenuBtn = document.querySelector("#mobile-menu-btn");
let toggleMenu = document.querySelector(".header-nav");

let getUrl = window.location.href;
let scrollBtn = document.querySelector(".planos-btn");

mobileMenuBtn.addEventListener("click", checkbox);

function checkbox(){
    if (mobileMenuBtn.checked) {
        toggleMenu.classList.add("open-header-nav");
    } else {
        toggleMenu.classList.remove("open-header-nav");
    }
}

scrollBtn.addEventListener("click", () => {
    mobileMenuBtn.checked = false;

    checkbox();
})


//Esconde o botão Planos do header quando não estiver na página principal
if (getUrl != "http://localhost/MeuHelpSite/index") {
    
    scrollBtn.classList.add("hide-header-btn");
    console.log("oi");    
}
