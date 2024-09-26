<?php
function cetak(){
    echo "Saya Balqis";
    echo "<br>";
    }
    cetak();


    echo "<hr>";
    function ageCount($nama,$tahun,$tempat){
        $umur=date("Y")-$tahun;
        echo "Hai perkenalkan nama saya $nama <br>
        umur saya $umur tahun <br>
        tempat tinggal saya di $tempat<br>";
        }
        ageCount("balqis",2008,"btn karang baru");
      

        echo "<hr>";
        function jumlahkan($bil1,$bil2){
            return $bil1+$bil2;
            }
         echo jumlahkan(9,5)."<br>";
         echo jumlahkan(8,3)."<br>";
          $jum=jumlahkan(7,6);
          echo $jum;
     
    
   
