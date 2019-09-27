//Scrolla para os cards de plano
let planosBtn = document.querySelectorAll(".scroll-down-btn");

for (let i = 0; i < planosBtn.length; i++) {
    planosBtn[i].addEventListener("click", event => {
        event.preventDefault();
    
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".container-planos").offset().top
        }, 1000);
    });
    
}

//Abre os formulários de cadastro do cliente

