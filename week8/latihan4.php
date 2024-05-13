<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table Form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        text-align: center;
    }

    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

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
    <div class="container">
        <h2>Create Table Form</h2>
        <form action="latihan4.php" method="post">
            <input type="number" name="rowCount" placeholder="Number of Rows">
            <input type="number" name="colCount" placeholder="Number of Columns">
            <button type="submit" name="kirim">Create Table</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rowCount = isset($_POST["rowCount"]) ? (int)$_POST["rowCount"] : 0;
        $colCount = isset($_POST["colCount"]) ? (int)$_POST["colCount"] : 0;

        if ($rowCount > 0 && $colCount > 0) {
            echo "<table>";
            for ($i = 1; $i <= $rowCount; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $colCount; $j++) {
                    echo "<td>Row $i, Col $j</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>


</body>

</html>