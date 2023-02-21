<link rel="stylesheet" href="style2.css">
<?php
session_start();
$hostname = $_SESSION['hostname'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = $_SESSION['dbname'];

$tname = $_POST['nazwaTabeli'];
$_SESSION['nazwaTabeli'] = $tname;
$liczbaKolumn=$_POST['liczbaKolumn'];
$conn = mysqli_connect($hostname, $username, $password, $dbname);

for($i=1;$i<$liczbaKolumn;$i++)
{
    $tabele[$i] = $_POST["kolumna$i"] ." VARCHAR(20) NOT NULL, ";
}
$tabele[$liczbaKolumn] = $_POST["kolumna$liczbaKolumn"] .' VARCHAR(20) NOT NULL)';

    $createTable = "CREATE TABLE $tname (
          ID INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY, ";
          for($i=1;$i<=$liczbaKolumn;$i++)
            {
                $createTable = $createTable.$tabele[$i];
            };
    
    if(mysqli_query($conn,$createTable))
    {
        echo('<p class="komunikat">Tabela została pomyślnie utworzona!<br>Przekierowywanie na stronę główną...</p>');
    }
    else{
        echo('<p class="komunikat">Podczas tworzenia tabeli wystąpił błąd!</p>');
    }
?>
<script>
setTimeout(function(){ window.location.href= 'index.php';}, 3000);
</script>
<footer>
        <p>Piotr Gała 2023 © Wszelkie prawa zastrzeżone.</p>
</footer>
<span id="source">Image by <a href="https://www.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_6764499.htm#query=wallpaper%20design&position=4&from_view=keyword">Freepik</a></span>