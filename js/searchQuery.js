const searchInput = document.querySelector("#searchInput");
const searchBtn = document.querySelector("#searchBtn");

searchBtn.addEventListener("click", event => {
    event.preventDefault();
    searchQuery(searchInput.value);
});

function searchQuery(search) {
    if (search == "cartao" || search == "cartão" || search == "cartão de crédito" ||
    search == "cartao de credito" || search == "cartao de crédito" || search == "cartão de credito" ||
    search == "credito" || search == "crédito") {
        console.log("oi"); 
        searchResult(1);

    } else if (search == "saude" || search == "saúde" || search == "planos de saúde" ||
    search == "planos de saude" || search == "plano de saúde" || search == "plano de saude") {
        searchResult(2);

    }
}

function searchResult(searchMade) {
    if (searchMade == 1){
        window.location.href = "";
    } else if (searchMade == 2){
        window.location.href = "";
    }
}