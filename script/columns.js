let listaKolumn = new Array();
let listaBr = new Array();

listaKolumn.push(document.getElementById("kolumna1"));

function makeColumn()
{
    let kreatorTabeli = document.getElementById("dodaj");

    let nowaKolumna = document.createElement("input");
    nowaKolumna.setAttribute("type", "text");
    nowaKolumna.setAttribute("placeholder", "Nazwa "+(listaKolumn.length+1)+". kolumny");
    listaKolumn.push(nowaKolumna);
    nowaKolumna.setAttribute("name", "kolumna"+(listaKolumn.length));
    kreatorTabeli.appendChild(nowaKolumna);
    
    let br = document.createElement("p");
    kreatorTabeli.appendChild(br);

    listaBr.push(br);
    document.getElementById("liczbaKolumn").value=listaKolumn.length;
}

function deleteColumn()
{
    if(listaKolumn.length <= 1)
        return;

    let kolumna = listaKolumn.pop();
    kolumna.remove();

    let br = listaBr.pop();
    br.remove();
    if(document.getElementById("liczbaKolumn").value!=1){
    document.getElementById("liczbaKolumn").value = document.getElementById("liczbaKolumn").value - 1;
    }
}