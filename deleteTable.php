<link rel="stylesheet" href="style2.css">
<?php
session_start();

$hostname = $_SESSION['hostname'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = $_SESSION['dbname'];

$conn = mysqli_connect($hostname, $username, $password, $dbname);

    $selected = $_POST['usunTabele'];
    $sql = "DROP TABLE $selected";
    if(mysqli_query($conn, $sql))
    {
        echo('<p class="komunikat">Pomyślnie usunięto tabele!<br>Przekierowywanie na stronę główną...</p>');
    }
    else
    {
        echo('<p class="komunikat">Podczas usuwania tabeli wystąpił błąd!<br>Przekierowywanie na stronę główną...</p>');
    }
?>
<script>
setTimeout(function(){ window.location.href= 'index.php';}, 3000);
</script>
<footer>
        <p>Piotr Gała 2023 © Wszelkie prawa zastrzeżone.</p>
</footer>
<span id="source">Image by <a href="https://www.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_6764499.htm#query=wallpaper%20design&position=4&from_view=keyword">Freepik</a></span>