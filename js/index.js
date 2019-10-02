//Scrolla para os cards de plano
let planosBtn = document.querySelectorAll(".scroll-down-btn");
let formBlur = document.querySelector(".js-form-blur");
let closeFormBtn = document.querySelectorAll(".js-close-form-button");

for (let i = 0; i < planosBtn.length; i++) {
    planosBtn[i].addEventListener("click", event => {
        event.preventDefault();
    
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".container-planos").offset().top
        }, 1000);
    });    
}

//Abre os formulários de cadastro do cliente

function openForm(event, button){

    event.preventDefault();

    document.querySelector(`.form-container-${button}`).classList.add("open-form");
    formBlur.classList.add("open-blur");
}

formBlur.addEventListener("click", closeForm);

for (let i = 0; i < closeFormBtn.length; i++) {
    closeFormBtn[i].addEventListener("click", closeForm);
    
}

function closeForm(){

    formBlur.classList.remove("open-blur");

    let forms = [
        document.querySelector(".form-container-1"),
        document.querySelector(".form-container-2"),
        document.querySelector(".form-container-3")
    ]

    for (let i = 0; i < forms.length; i++) {

        forms[i].classList.remove("open-form");        
    }
}