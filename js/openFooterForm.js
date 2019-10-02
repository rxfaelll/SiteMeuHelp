let footerFormBtn = document.querySelector(".footer-form-btn");
let footerFormBlur = document.querySelector("#footerFormBlur");
let footerForm = document.querySelector(".footer-form");
let closeFooterFormBtn = document.querySelector(".js-close-footer-form-button");


footerFormBtn.addEventListener("click", event => {
    event.preventDefault();

    openFooterForm();
});

footerFormBlur.addEventListener("click", closeFooterForm);

closeFooterFormBtn.addEventListener("click", closeFooterForm)


function openFooterForm() {
    footerForm.classList.add("footer-form-open");
    footerFormBlur.classList.add("footer-form-open");
}

function closeFooterForm() {
    footerForm.classList.remove("footer-form-open");
    footerFormBlur.classList.remove("footer-form-open");
}

