function logowanieSerwer(){

    let inputBazaDanych = document.getElementById("bazaDanychInput");
    inputBazaDanych.style.display = "none";
    let button = document.getElementById("bazaDanych");
    button.setAttribute("class", "niewybranyForm");
    let button2 = document.getElementById("serwer");
    button2.setAttribute("class", "");
    let form = document.getElementById("formularz");
    form.setAttribute("action", "connectServer.php")

}

function logowanieBazaDanych(){
    
    let inputBazaDanych = document.getElementById("bazaDanychInput");
    inputBazaDanych.style.display = "block";
    let button = document.getElementById("serwer");
    button.setAttribute("class", "niewybranyForm");
    let button2 = document.getElementById("bazaDanych");
    button2.setAttribute("class", "");
    let form = document.getElementById("formularz");
    form.setAttribute("action", "connect.php")

}