<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ügyfelek</title>
</head>

<body>
<center><h1>Ügyfelek</h1></center>
<center><table width=30% border=1>
<tr><td>ID</td><td>Név</td><td>Lakcím</td><td>Város</td><td>IRSZ</td><td colspan=2><center>Művelet</td></tr>

<?php
$servername = "localhost"; // adatbázis kapcsolódási adatok
$username = "root";
$pw = "";
$dbase = "1-13-e";
// adatbázis kapcsolódás:
$kapocs = mysqli_connect($servername, $username, $pw, $dbase);

// ha nincs kapcsolat, akkor hibát ír:
if (!$kapocs) { die(mysqli_connect_error());}

//az adatbázis lekérdezése:
$sql = "SELECT * FROM ugyfelek";
$result = mysqli_query($kapocs, $sql);
//az eredmények tömbként való kiírása előltesztelő ciklus segítségével
while ($row=mysqli_fetch_assoc($result)) {
	// soronként kerül kiíratásra, amíg el nem éri az utolsó sor végét:
echo "<tr><td>".$row["id"]."</td><td>".$row["nev"]."</td><td>".$row["lakcim"];
echo "</td><td> ".$row["varos"]."</td><td><center>".$row["irsz"]."</td><td>";
// egy-egy lekérdezéshez ha szeretnénk módosítani, választunk egy modosit.php módosítót,
// majd hozzáillesztjük a megfelelő változót és értékét!
echo "<a href=modosit.php?id=".$row["id"]."> Módosítás </a></td>";
echo "<td><a href=torles.php?id=".$row["id"]."> Törlés </a></td></tr>";
}
echo"</table></center>";
echo"<br><center><a href=ujadat.php>Új bejegyzés az adatbázisba</a></center>";
//ha végeztünk a lekérdezéssel, illik az adatbázis kapcsolatot lezárni!
mysqli_close($kapocs);

?>
</body>
</html>