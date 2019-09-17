let planosBtn = document.querySelector("#planosBtn");

planosBtn.addEventListener("click", event => {
    event.preventDefault();

    $([document.documentElement, document.body]).animate({
        scrollTop: $(".container-planos").offset().top
    }, 1000);
})

// $(planosBtn).click(function() {

// });