<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>

<body>
    <?php
    $arr_buah = array();
    if (isset($_SESSION['buah'])) {
        $arr_buah = $_SESSION['buah'];
    }
    if (isset($_POST['buah'])) {
        $buah_baru = $_POST['buah'];
        if (!in_array($buah_baru, $arr_buah)) {
            $arr_buah[] = $buah_baru;
        }
    }
    $_SESSION['buah'] = $arr_buah;

    echo "<ol>";
    foreach ($arr_buah as $nama_buah) {
        echo "<li>$nama_buah</li>";
    }
    echo "</ol>";
    ?>
    <a href="page1.php">&lt;&lt; Kembali</a>
</body>

</html>