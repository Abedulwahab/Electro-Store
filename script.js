let searchInput = document.getElementById("searchInput");
let cards = document.querySelectorAll(".product-card");

searchInput.addEventListener("keyup", function(){
    let value = searchInput.value.toLowerCase();

    cards.forEach(function(card){
        let text = card.innerText.toLowerCase();

        if(text.includes(value)){
            card.style.display = "block";
        }
        else{
            card.style.display = "none";
        }
    });
});