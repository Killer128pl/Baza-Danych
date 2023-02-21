<?php
session_start();
$hostname = $_POST["hostname"]; 
$username = $_POST["username"];
$password = $_POST["password"];
$dbname = $_POST["dbname"];

$_SESSION["hostname"] = $hostname;
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$_SESSION["dbname"] = $dbname;

$conn = mysqli_connect($hostname, $username, $password, $dbname);//or die("Nie znaleziono bazy danych".mysqli_error());
if($conn==false){
echo '<p class="komunikat">Nie znaleziono bazy danych</p>';
}
else{
echo '<p class="komunikat">Połączono z bazą danych</p><br><span id="log"></span>';

include "tableForm.php";

}
?>
<!DOCTYPE html>
<html lang="pl">
<link rel="stylesheet" href="style2.css">

</html>
