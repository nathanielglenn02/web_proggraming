<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- nomor 1 -->
    <p>
        <?php
        $n = 3;
        for ($i = 1; $i <= $n; $i++) {
            echo "
                <a href=\"filekedua.php?nomor=$i\">LATIHAN 1 nomor $i ke halaman 2 <br></a>
                ";
        }
        ?>
    </p>

    <p>
        <a href="filekedua.php?kota=surabaya&penduduk=100000">Klik Aku</a>
    </p>
    <?php
    if (isset($_GET["id"])) {
        $angka = $_GET["id"];
        echo "angka = $angka";
    }

    ?>
    <!-- nomor 2 -->
    <p>
        <?php
        $n = 3;
        for ($i = 1; $i <= $n; $i++) {
            echo "
                <a href=\"week5.php?nomor=$i\">LATIHAN 2 nomor $i ke halaman 2 <br></a>
                ";
        }
        ?>
    </p>

    <p>
        <?php
        if (isset($_GET["nomor"])) {
            $nomor = $_GET["nomor"];
            echo "Nomor yang dikirim adalah $nomor<br>";
        }
        ?>
    </p>

    <!-- nomor 3 -->
    <!-- <p>
        <?php
        $n = 4;
        for ($jumlah = 1; $jumlah <= $n; $jumlah++) {
            $qs = "?jumlah=$jumlah";
            $hnmr = [];
            for ($nmr = 1; $nmr <= $jumlah; $nmr++) {
                $qs .= "&nomor$nmr=" . ($nmr * 2);
                $hnmr = $nmr;
            }
            echo "<a href=\"filekedua.php$qs\">soal nomor 3 jumlah = $jumlah <br></a>";
        }
        ?>
    </p> -->

    <p>
        <?php
        $n = 5; // Ubah n sesuai dengan jumlah hyperlink yang diinginkan

        for ($i = 1; $i <= $n; $i++) {
            echo "<a href=\"filekedua.php?jumlah=" . $i;
            for ($j = 1; $j <= $i; $j++) {
                echo "&nomor" . $j . "=" . ($j * 2);
            }
            echo "\">Link ke Halaman Tujuan " . $i . "</a><br>";
        }
        ?>
    </p>

</body>

</html>