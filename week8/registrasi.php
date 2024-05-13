<?php
session_start();

// Inisialisasi session jika belum ada
if (!isset($_SESSION['peserta'])) {
    $_SESSION['peserta'] = array();
}

// Tangani submit form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Ambil data dari form
    $namaDepan = $_POST["namaDepan"];
    $namaBelakang = $_POST["namaBelakang"];

    // Tambahkan data ke dalam session
    $_SESSION['peserta'][] = array('namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang);
    header("location: peserta.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Peserta</title>
</head>

<body>
    <h2>Registrasi Peserta</h2>
    <form method="post" action="registrasi.php">
        <label for="namaDepan">Nama Depan:</label><br>
        <input type="text" id="namaDepan" name="namaDepan" required><br>
        <label for="namaBelakang">Nama Belakang:</label><br>
        <input type="text" id="namaBelakang" name="namaBelakang" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>