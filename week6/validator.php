<?php
//validator

if (isset($_POST["btnKirim"])) {
    $angka = $_POST["txtAngka"];
    $random = mt_rand(1, 10);

    if ($angka == $random) {
        header("location: result1.php?angka=" . $angka);
    } else {
        header("location: result2.php?angka=" . $angka);
    }
}
