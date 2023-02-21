<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dokument</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<script src="script/tables.js"></script>
<script src="script/columns.js"></script>
<script src="script/logout.js"></script>

    <header>
        <button id="logout" onClick="logout();"><img id="turnoff" src="img/turn-off.png"><span id="logout-napis">Wyloguj Się</span></button>
    </header>


    <article>
        <button class="" id="dodawanieTabel" onClick="dodawanieTabeli();">DODAJ</button>
        <button class="niewybranyForm" id="modyfikacja" onClick="modyfikowanieTabeli();">MODYFIKUJ</button>
        <button class="niewybranyForm" id="usuwanieTabel" onClick="usuwanieTabeli();">USUŃ</button>
            <div>

            <form action="createTable.php" method="POST" id="formularz">
            <section id="inputyDodawania">
            <p>Nazwa tabeli:</p><p><input type="text" name="nazwaTabeli" id="nazwaTabeli"></p>
            <p><input id="buttonDelete" type="button" value="-" onClick="deleteColumn();"><input id="buttonAdd" type="button" value="+" onClick="makeColumn();"></p>
            <p><input type="text" value="ID" readonly></p>
            <p><input type="text" name="kolumna1" id="kolumna1" placeholder="Nazwa 1. kolumny"></p>
            <a id="dodaj"></a>
            </section>
            <section id="inputyUsuwania">
                <p><br></p>
                <?php

                    $hostname = $_SESSION["hostname"]; 
                    $username = $_SESSION["username"];
                    $password = $_SESSION["password"];
                    $dbname = $_SESSION["dbname"];

                    $conn = mysqli_connect($hostname, $username, $password, $dbname);
                    
                    $zapytanie = mysqli_query($conn,"SHOW TABLES");
                    echo '<select name="usunTabele">';
                    echo '<option value="" disabled selected hidden>Wybierz tabelę</option>';
                    while($nazwy = mysqli_fetch_array($zapytanie))
                    {
                        echo '<option value="'.$nazwy[0].'">'.$nazwy[0].'</option>';
                    }
                    echo '</select>';
                ?>

            </section>
            <p><input id="submitTabela" type="submit" value="Dodaj"></p>

            <input type="hidden" id="liczbaKolumn" name="liczbaKolumn" value="1">

            </form>

            <div>

    </article>

    <footer>
        <p>Piotr Gała 2023 © Wszelkie prawa zastrzeżone.</p>
    </footer>

    <span id="source">Image by <a href="https://www.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_6764499.htm#query=wallpaper%20design&position=4&from_view=keyword">Freepik</a></span>

</body>
</html>