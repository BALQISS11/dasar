<?php

$nilai=-1;


if($nilai>=90 AND $nilai <=100){
    $predikat="A";
}
elseif($nilai>=80 AND $nilai <=89){
    $predikat="B";
}
elseif($nilai>=70 AND $nilai <=79){
    $predikat="C";
}
elseif($nilai>=60 AND $nilai <=69){
    $predikat="D";
}
elseif($nilai>=0 AND $nilai<=59){
    $predikat="E";
}
else{
    $predikat= "Tidak ada";
}


$hasil="$nilai:$predikat";
print $hasil;