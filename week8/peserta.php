<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <style>
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <h2>Data Peserta</h2>
    <?php
    session_start();

    // Cek apakah ada data peserta dalam session
    if (isset($_SESSION['peserta']) && count($_SESSION['peserta']) > 0) {
        // Data peserta tersedia, tampilkan dalam tabel
        echo "<table>";
        echo "<tr><th>Nama Depan</th><th>Nama Belakang</th></tr>";
        foreach ($_SESSION['peserta'] as $peserta) {
            echo "<tr>";
            echo "<td>" . $peserta['namaDepan'] . "</td>";
            echo "<td>" . $peserta['namaBelakang'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        // Tidak ada data peserta dalam session
        echo "<p>Tidak ada data peserta yang terdaftar.</p>";
    }
    ?>
</body>

</html>