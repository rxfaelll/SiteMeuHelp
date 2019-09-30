let mobileMenuBtn = document.querySelector("#mobile-menu-btn");
let toggleMenu = document.querySelector(".header-nav");

mobileMenuBtn.addEventListener("click", checkbox);

function checkbox(){
    if (mobileMenuBtn.checked) {
        toggleMenu.classList.add("open-header-nav");
    } else {
        toggleMenu.classList.remove("open-header-nav");
    }
}