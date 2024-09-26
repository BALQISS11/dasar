<?php
$nama=array("Andi","Budi","Candra","Dedi","Emon");
echo $nama[3];


echo "<hr>";
$nama=array("Andi","Budi","Candra","Dedi","Emon");
foreach ($nama as $n){
    echo $n.'<br>';
}

//Update array
echo "<hr>";
$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama[4]="Zulfa";
foreach ($nama as $n){
    echo $n.'<br>';
}

//Menambah data array
echo "<hr>";
$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama[]="Maimunah";
foreach ($nama as $n){
    echo $n.'<br>';
}

//enghapus data array
echo "<hr>";
$nama=array("Andi","Budi","Candra","Dedi","Emon");
unset($nama[1]);
foreach ($nama as $n){
    echo $n.'<br>';
}


echo "<hr>";
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
echo $data["nama"]."<br>";
echo $data["kelas"];


//Update data
echo "<hr>";
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
foreach ($data as $dt){
    echo $dt.'<br>';
}

//Menambah data
echo "<hr>";
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
$data["nama"]="budi";
foreach ($data as $dt){
    echo $dt.'<br>';
}

//Menghapus data
echo "<hr>";
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
$data["jenis_kelamin"]="Laki-Laki";
foreach ($data as $dt){
    echo $dt.'<br>';
}


echo "<hr>";
$data=array( array("nama"=>"Andi","nisn"=>"98765665845","kelas"=>"XI RPL 1"),
             array("nama"=>"Budi","nisn"=>"98723465812","kelas"=>"XI RPL 1"),
             array("nama"=>"Candra","nisn"=>"98125665437","kelas"=>"XI RPL 2"),
             array("nama"=>"Dedi","nisn"=>"99346567563","kelas"=>"XI RPL 2"));
             foreach ($data as $dt){
                echo $dt["nama"].'--'.$dt["nisn"]."--".$dt["kelas"]."<br>";
            }


echo "<hr>";
$data=array( array("nama"=>"Andi","nisn"=>"98765665845","kelas"=>"XI RPL 1"),
             array("nama"=>"Budi","nisn"=>"98723465812","kelas"=>"XI RPL 1"),
             array("nama"=>"Candra","nisn"=>"98125665437","kelas"=>"XI RPL 2"),
             array("nama"=>"Dedi","nisn"=>"99346567563","kelas"=>"XI RPL 2")); 
             $jsonData=json_encode($data,JSON_PRETTY_PRINT);
             echo "<pre>".$jsonData."</pree>";


echo "<hr>";
$data=array( array("nama"=>"Andi","nisn"=>"98765665845","kelas"=>"XI RPL 1"),
             array("nama"=>"Budi","nisn"=>"98723465812","kelas"=>"XI RPL 1"),
             array("nama"=>"Candra","nisn"=>"98125665437","kelas"=>"XI RPL 2"),
             array("nama"=>"Dedi","nisn"=>"99346567563","kelas"=>"XI RPL 2")); 
             foreach ($data[0] as $dt){
                echo $dt."<br>";
             }