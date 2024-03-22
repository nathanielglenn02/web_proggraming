<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tgl2 = "1 April 2024";
    $waktu = strtotime("now");
    $waktu1 = strtotime("22 March 2024");
    $waktu2 = strtotime($tgl2);
    echo $waktu1 . "<br>";
    echo $waktu2 . "<br>";
    echo "Selisih = " . ceil(($waktu2 - $waktu1) / 86400) . " hari <br>";

    echo date("d/m/Y H:i:s") . "<br>";
    echo date("Y-m-d", $waktu2) . "<br>";
    echo date("Y-m-d", strtotime("29 May 2024")) . "<br>";

    $tgl = 10;
    $bln = 6;
    $thn = 2024;
    // 12 hari sebelumnya
    // jam,menit,detik,bulan,tgl,tahun
    $wkt = mktime(18, 61, 70, $bln, $tgl - 12, $thn);
    echo date("d F Y H:i:s", $wkt) . "<br>";

    ?>
</body>

</html>