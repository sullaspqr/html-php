<?php

 if(!isset($_GET["id"])){
	 echo "Hiba történt! <a href=index.php>Vissza a főoldalra!</a> <br>";
 } else {
$servername = "localhost";
$username = "root";
$pw = "";
$dbase = "1-13-e";

$kapocs = mysqli_connect($servername, $username, $pw, $dbase);

if (!$kapocs) { die(mysqli_connect_error());}

$id= $_GET['id'];
$sql = "DELETE FROM `ugyfelek` Where id=$id ";

$result = mysqli_query($kapocs, $sql);


echo "Sikeres volt a törlés! <a href=index.php>Vissza a főoldalra!</a> <br>";

}
?>