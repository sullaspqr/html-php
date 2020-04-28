<?php
  header('Content-Type: text/html; charset=utf-8');
// ha MÉG NEM történt erről az oldalról küldés (submit, aminek a btn volt a neve, az űrlapon alul!)
// akkor betölti az adatokkal amik az index.php-oldalról érkeztek,
// az űrlapot!
  if(!isset($_POST["btn"])){
$servername = "localhost";
$username = "root";
$pw = "";
$dbase = "1-13-e";

$kapocs = mysqli_connect($servername, $username, $pw, $dbase);

if (!$kapocs) { die(mysqli_connect_error());}
// mivel az előző oldalról egyetlen adatot érkeztetünk, ez a jarmu_id ezt GET-el át tudjuk venni!
$id= $_GET['id'];
// ezzel az adattal megcsináljuk a lekérdezést adott rekordra a jarmu_id alapján!
$sql = "SELECT * FROM `ugyfelek` Where id=$id";

$result = mysqli_query($kapocs, $sql);
// itt beolvasunk egy rekordot és az alapján a szövegmezőket feltöltjük a beolvasott adatokkal!
while ($row=mysqli_fetch_assoc($result)) {
$id2 =$row['id'];
$nev =$row['nev'];
$lakcim=$row['lakcim'];
$varos=$row['varos'];
$irsz=$row['irsz'];
echo "<form name=kakukk method=post>";
echo "Név: <input type=text name=nev value=$nev><br>";
echo "Lakcím: <input type=text name=lakcim value=$lakcim><br>";
echo "Város: <input type=text name=varos value=$varos><br>";
echo "Irányítószám: <input type=text name=irsz value=$irsz><br>";
echo "<input type=hidden name=id value=$id2><br>";

echo "<input type=submit name=btn value=Kuldes><br>";
echo "</form>";

}
mysqli_close($kapocs);
  }
else{
// ha erről az oldalról megtörtént a küldés, akkor ezt hajtja végre:
$servername = "localhost";
$username = "root";
$pw = "";
$dbase = "1-13-e";

$kapocs = mysqli_connect($servername, $username, $pw, $dbase);

if (!$kapocs) { die(mysqli_connect_error());}
//minden post adatot átalakítunk "értelmes változóra":
$id= $_POST['id'];
$nev= $_POST['nev'];
$lakcim= $_POST['lakcim'];
$varos= $_POST['varos'];
$irsz= $_POST['irsz'];
//majd ezekkel végrehajtjuk a frissítő lekérdezést:
$sql = "UPDATE `ugyfelek` SET `nev` = '$nev', `lakcim` = '$lakcim', `varos` = '$varos', `irsz` = $irsz WHERE id=$id";

$result = mysqli_query($kapocs, $sql);
mysqli_close($kapocs);
echo "Kész! Vissza a főoldalra: <a href=index.php>Katt ide!</a>";

}

?>