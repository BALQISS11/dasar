<?php

$nip = "200802112009042002";
$info =info_nip($nip);

function info_nip($nip){

    $tahun = substr($nip,0,4);
    $bulan = substr($nip,4,2);
    $hari = substr($nip,6,2);

    $digit_ke_15 =substr($nip,17,2);
    if ($digit_ke_15 == '1'){
        $jenis_kelamin = "laki=laki";
    } elseif ($digit_ke_15 == '2'){
        $jenis_kelamin = "perempuan";
    } else {
        $jenis_kelamin = "tidak diketahui";
    }
    
    $tanggal_lahir =$hari ." ".namabulan($bulan) ." ". $tahun;
    $pensiun=$tahun + 60;

    return [
        'tanggal_lahir' => $tanggal_lahir,
        'jenis_kelamin' => $jenis_kelamin,
        'pensiun' => $pensiun,
    ];
}

function namabulan($bulan){
    $nama_bulan = [
        '01' => 'januari',
        '02' => 'februari',
        '03' => 'maret',
        '04' => 'april',
        '05' => 'mei',
        '06' => 'juni',
        '07' => 'juli',
        '08' => 'agustus',
        '09' => 'september',
        '10' => 'oktober',
        '11' => 'november',
        '12' => 'desmber',


    ];
    return $nama_bulan[$bulan];

}
    
echo "tanggal lahir: " . $info['tanggal_lahir'] . "<br>";
echo "jenis kelamin: " . $info['jenis_kelamin'] . "<br>";
echo "pensiun: " . $info['pensiun'] . "<br>";

?>
