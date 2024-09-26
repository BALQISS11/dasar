<?php
function cetak(){
 echo "Selamat Datang";
 echo "<br>";
 }
 cetak();
 cetak();


echo "<hr>";
function balqis($nama){
echo "Selamat Datang ".$nama;
echo "<br>";
}
balqis("Andi");
balqis("Budi");


echo "<hr>";
function ageCount($nama,$tahun){
    $umur=date("Y")-$tahun;
    echo "Hai $nama, umur kamu $umur tahun <br>";
    }
    ageCount("Andi",2009);
    ageCount("Budi",2001);


    echo "<hr>";
    function aqis($nama,$tahun=2000){
     $umur=date("Y")-$tahun;
     echo "Hai $nama, umur kamu $umur tahun <br>";
     }
    aqis("Andi",2009);
    aqis("Budi");


    echo "<hr>";
    function jumlahkan($bil1,$bil2){
       return $bil1+$bil2;
       }
    echo jumlahkan(5,2)."<br>";
    echo jumlahkan(7,9)."<br>";
     $jum=jumlahkan(6,4);
     echo $jum;

