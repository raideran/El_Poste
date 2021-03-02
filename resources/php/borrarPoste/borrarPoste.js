var button = document.getElementById("btnborrar");
var cards = document.getElementById("card");
button.onclick = function() {
    cards.innerHTML = cards + "";
};