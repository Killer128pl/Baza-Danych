<link rel="stylesheet" href="style2.css">
<?php
session_start();

$hostname = $_SESSION["hostname"]; 
$username = $_SESSION["username"];
$password = $_SESSION["password"];

$conn = mysqli_connect($hostname, $username, $password);

$dbname=$_POST['nazwaBazyDanych'];
$_SESSION["dbname"] = $dbname;


$createDB="CREATE DATABASE " . "$dbname";
if(mysqli_query($conn,$createDB))
    {
        echo('<p class="komunikat">Baza danych została pomyślnie utworzona!</p>');
        include "tableForm.php";
    }
    else{
        echo('<p class="komunikat">Podczas tworzenia bazy danych wystąpił błąd!</p>');
    }
?>
<span id="source">Image by <a href="https://www.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_6764499.htm#query=wallpaper%20design&position=4&from_view=keyword">Freepik</a></span>