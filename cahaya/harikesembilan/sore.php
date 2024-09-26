<?php
$usia=79;
if($usia>=0 and $usia<=12){
    $status="Anak-Anak";
}elseif($usia>=13 and $usia<=17){
    $status="Remaja";
}elseif($usia>=18 and $usia<=59){
    $status="Dewasa";
}elseif($usia>=60){
    $status=" Lansia";
}

echo "Usia Anda ".$usia.",Anda termasuk kedalam kategori".
$status;