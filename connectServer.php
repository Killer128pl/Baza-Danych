<?php
session_start();

$hostname = $_POST["hostname"]; 
$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["hostname"] = $hostname;
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

$conn = mysqli_connect($hostname, $username, $password);//or die("Nie znaleziono bazy danych".mysqli_error());
if($conn==false){
echo('<p class="komunikat">Nie znaleziono serwera</p>');
}
else{
    echo '<p class="komunikat">Połączono z serwerem</p><br><span id="log"></span>';

}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dokument</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<script src="script/databases.js"></script>
<script src="script/logout.js"></script>

<header>
    <button id="logout" onClick="logout();"><img id="turnoff" src="img/turn-off.png"><span id="logout-napis">Wyloguj Się</span></button>
</header>

<article>
        <button class="" id="dodawanie" onClick="dodawanieBazyDanych();">DODAJ</button>
        <button class="niewybranyForm" id="usuwanie" onClick="usuwanieBazyDanych();">USUŃ</button>
            <div>

            <form action="createDatabase.php" method="POST" id="formularz">

            <section id="inputyDodawania">
                <p>Nazwa bazy danych:</p><p><input type="text" name="nazwaBazyDanych" id="nazwaBazyDanych"></p>
            </section>

            <section id="inputyUsuwania">
            <p><br></p>
                <?php

                    $conn = mysqli_connect($hostname, $username, $password);
                    
                    $zapytanie = mysqli_query($conn,"SHOW DATABASES");
                    echo '<select name="usunBaze">';
                    echo '<option value="" disabled selected hidden>Wybierz bazę danych</option>';
                    while($nazwy = mysqli_fetch_array($zapytanie))
                    {
                        echo '<option value="'.$nazwy[0].'">'.$nazwy[0].'</option>';
                    }
                    echo '</select>';
                ?>

            </section>

                <p><input id="submitBaza" type="submit" value="Dodaj"></p>

            </form>

            <div>

      </article>

      <footer>
        <p>Piotr Gała 2023 © Wszelkie prawa zastrzeżone.</p>
    </footer>

    <span id="source">Image by <a href="https://www.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_6764499.htm#query=wallpaper%20design&position=4&from_view=keyword">Freepik</a></span>

</body>
</html>