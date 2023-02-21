<link rel="stylesheet" href="style2.css">
<?php
session_start();

$hostname = $_SESSION["hostname"]; 
$username = $_SESSION["username"];
$password = $_SESSION["password"];

$conn = mysqli_connect($hostname, $username, $password);

$baza=$_POST['usunBaze'];
$deleteDB="DROP DATABASE " . "$baza";;
if(mysqli_query($conn,$deleteDB))
    {
        echo('<p class="komunikat">Baza danych została pomyślnie usunięta!<br>Przekierowywanie na stronę główną...</p>');
    }
    else{
        echo('<p class="komunikat">Podczas usuwania bazy danych wystąpił błąd!<br>Przekierowywanie na stronę główną...</p>');
    }
?>
<script>
setTimeout(function(){ window.location.href= 'index.php';}, 3000);
</script>
<footer>
        <p>Piotr Gała 2023 © Wszelkie prawa zastrzeżone.</p>
</footer>
<span id="source">Image by <a href="https://www.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_6764499.htm#query=wallpaper%20design&position=4&from_view=keyword">Freepik</a></span>