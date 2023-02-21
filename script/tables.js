function dodawanieTabeli(){

    let button = document.getElementById("usuwanieTabel");
    button.setAttribute("class", "niewybranyForm");
    let button2 = document.getElementById("dodawanieTabel");
    button2.setAttribute("class", "");
    let button3 = document.getElementById("modyfikacja");
    button3.setAttribute("class", "niewybranyForm");
    let form = document.getElementById("formularz");
    form.setAttribute("action", "createTable.php")
    let submit = document.getElementById("submitTabela");
    submit.setAttribute("value", "Dodaj");

    let inputyDodawania = document.getElementById("inputyDodawania");
    inputyDodawania.style.display = "block";
    let inputyUsuwania = document.getElementById("inputyUsuwania");
    inputyUsuwania.style.display = "none";

}

function usuwanieTabeli(){

    let button = document.getElementById("dodawanieTabel");
    button.setAttribute("class", "niewybranyForm");
    let button2 = document.getElementById("usuwanieTabel");
    button2.setAttribute("class", "");
    let button3 = document.getElementById("modyfikacja");
    button3.setAttribute("class", "niewybranyForm");
    let form = document.getElementById("formularz");
    form.setAttribute("action", "deleteTable.php")
    let submit = document.getElementById("submitTabela");
    submit.setAttribute("value", "Usuń");

    let inputyDodawania = document.getElementById("inputyDodawania");
    inputyDodawania.style.display = "none";
    let inputyUsuwania = document.getElementById("inputyUsuwania");
    inputyUsuwania.style.display = "block";


}

function modyfikowanieTabeli(){

    let button = document.getElementById("dodawanieTabel");
    button.setAttribute("class", "niewybranyForm");
    let button2 = document.getElementById("usuwanieTabel");
    button2.setAttribute("class", "niewybranyForm");
    let button3 = document.getElementById("modyfikacja");
    button3.setAttribute("class", "");
    let form = document.getElementById("formularz");
    form.setAttribute("action", "modTable.php")
    let submit = document.getElementById("submitTabela");
    submit.setAttribute("value", "Modyfikuj");

    let inputyDodawania = document.getElementById("inputyDodawania");
    inputyDodawania.style.display = "none";
    let inputyUsuwania = document.getElementById("inputyUsuwania");
    inputyUsuwania.style.display = "block";

}