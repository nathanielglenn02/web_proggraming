<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE KEDUA</title>
</head>

<body>
    <?php
    if (isset($_GET["kota"])) {
        $kota = $_GET["kota"];
        echo "Nama Kota = $kota<br>";
    }
    if (isset($_GET["penduduk"])) {
        $kota = $_GET["penduduk"];
        echo "Jumlah Penduduk = $kota<br>";
    }
    if (isset($_GET["nomor"])) {
        $nomor = $_GET["nomor"];
        echo "Nomor yang dikirim adalah $nomor<br>";
    }

    if (isset($_GET['jumlah'])) {
        $jumlah = $_GET['jumlah'];
        $nomor_array = array(); // membuat array kosongan

        for ($i = 1; $i <= $jumlah; $i++) {
            if (isset($_GET['nomor' . $i])) {
                $nomor_array[] = $_GET['nomor' . $i];
            }
        }

        echo 'Nomor yang dikirim adalah ' . implode(',', $nomor_array);
    }


    ?>
</body>

</html>