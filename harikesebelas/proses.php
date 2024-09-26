<?php

function ekstrakNIP($nip){

    $tanggal = substr($nip, 6, 2);
    $bulan = substr($nip, 4, 2);
    $tahun = substr($nip, 0, 4);
    $jk = substr($nip, 14, 1);

    $date = date_create($tanggal.'-' .$bulan.'-' .$tahun);
    $data['tanggal']=date_format($date,"d F Y" );

    if ($jk==1){
        $data['jk']='laki-laki';
    }else{
        $data['jk']='perempuan';
    }
    $tanggalPensiun="01";
    $bulanPensiun=$bulan+1;
    $tahunPensiun=$tahun+60;
    $pensiun=date_create($tanggalPensiun.'-' .$bulanPensiun.'-' .$tahunPensiun);
    $data['pensiun']=date_format($pensiun,"d F Y" );
    
    return $data;

}

$dataEkstrak=ekstrakNIP($_POST['nip']);
foreach ($dataEkstrak as $de){
    echo $de."<br>";
}