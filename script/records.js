function dodawanieRekordow(){

    let button = document.getElementById("usuwanie");
    button.setAttribute("class", "niewybranyForm");
    let button2 = document.getElementById("dodawanie");
    button2.setAttribute("class", "");
    let form = document.getElementById("formularz");
    form.setAttribute("action", "createRecord.php")
    let submit = document.getElementById("submitRekord");
    submit.setAttribute("value", "Dodaj");

    let inputyDodawania = document.getElementById("inputyDodawania");
    inputyDodawania.style.display = "block";
    let inputyUsuwania = document.getElementById("inputyUsuwania");
    inputyUsuwania.style.display = "none";

}

function usuwanieRekordow(){
    
    let button = document.getElementById("dodawanie");
    button.setAttribute("class", "niewybranyForm");
    let button2 = document.getElementById("usuwanie");
    button2.setAttribute("class", "");
    let form = document.getElementById("formularz");
    form.setAttribute("action", "deleteRecord.php")
    let submit = document.getElementById("submitRekord");
    submit.setAttribute("value", "Usuń");

    let inputyDodawania = document.getElementById("inputyDodawania");
    inputyDodawania.style.display = "none";
    let inputyUsuwania = document.getElementById("inputyUsuwania");
    inputyUsuwania.style.display = "block";

}