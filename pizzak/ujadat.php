<?php
  header('Content-Type: text/html; charset=utf-8');
//2 felé osztjuk a weboldalunkat: ellenőrízzük, hogy volt-e űrlapküldés?
//1., még nem volt űrlapküldés: kiíratjuk az űrlapot! Ilyenkor
//nem lehet benne value érték! (módosításnál van csak!)
//2., már volt, így a kapott adatokkal mehet az SQL feltöltés!
  if(!isset($_POST["btn"])){

echo "<form name=kakukk method=post>";
echo "Név: <input type=text name=nev><br>";
echo "Lakcím: <input type=text name=lakcim><br>";
echo "Város: <input type=text name=varos><br>";
echo "IRSZ: <input type=text name=irsz><br>";
echo "<input type=hidden name=id><br>";
echo "<input type=submit name=btn value=Kuldes><br>";
// a $btn változóval figyeljük az űrlapküldés tényét!
echo "</form>";

} // eddig volt az űrlap kirajzolás
// innentől jön az SQL feltöltés!
else{
// szokásos adatok megadása:
$servername = "localhost";
$username = "root";
$pw = "";
$dbase = "1-13-e";

$kapocs = mysqli_connect($servername, $username, $pw, $dbase);

if (!$kapocs) { die(mysqli_connect_error());}
//ez a rész csak azért kell, hogy a POST-al megkapott változókat
//átalakítsuk normális változókká, amivel az SQL megy!
$nev= $_POST['nev'];
$lakcim= $_POST['lakcim'];
$varos= $_POST['varos'];
$irsz= $_POST['irsz'];
$sql = "INSERT INTO `ugyfelek` VALUES(null, '$nev', '$lakcim', '$varos', $irsz)";
//a lekérdezést a query-vel végezzük!
//kapocs-al csatlakozunk, és az sql változóban pedig a lekérdezést
//készítjük el!
$result = mysqli_query($kapocs, $sql);

echo "Kész! Vissza a főoldalra: <a href=index.php>Katt ide!</a>";
mysqli_close($kapocs);
}


?>


