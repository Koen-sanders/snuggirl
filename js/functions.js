function redirect(element) {
    window.location.replace(element);
}

function checkPage() {
    var currentpage = window.location.pathname;
    var btn = document.getElementById("btn1")
   

    if(currentpage == "/snuggirl/" || currentpage == "/snuggirl/index.php") {
        btn.style.color = "turquoise";
        
    }
}