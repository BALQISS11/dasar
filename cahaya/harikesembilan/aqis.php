<?php

$nama="balqis";
echo $nama;
echo "<hr>";

//penjumlahan

$a="5";
$b="3";
$hasil=($a+$b);
echo $hasil;
echo "<hr>";

//perkalian

$a="9";
$b="5";
$hasil=($a*$b);
echo $hasil; 
echo "<hr>";

//volume tabung

$phi=3.14;
$r=9;
$tinggi=12;
$hasil=($phi*$r*$r*$tinggi);
echo $hasil;
echo "<p>";
?>



<!-- form halaman login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <form action="data.php" method="GET">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <a href="aqis.php?nama=balqis"></a>
    <hr>
    <title>dokumen</title>
</head>
</body>
<form action="data.php" method="GET">
    <label for="nama">NAMA</label><br>
    <input type="NAMA" name="NAMA" id="NAMA"><br>
    <label for="NISN" name="NISN" >NISN</label><br>
    <input type="NISN" name="NISN" id="NISN"><br>
    <button type="submit">Kirim</button>
    </form>
</body>
</html>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <a href="aqis.php?nama=balqis"></a>
    <hr>
    <title>dokumen</title>
</head>
</body>
<form action="hasil tabung.php" method="GET">
    <label for="r">R:</label><br>
    <input type="number" id="R" name="R"><br>

    <label for="t">T:</label><br>
    <input type="number" id="T" name="T"><br>
    <button type="submit">Kirim</button>
    </form>
</body>
</html>
