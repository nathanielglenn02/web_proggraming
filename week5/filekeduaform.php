<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE KEDUA FORM</title>
</head>

<body>
    <p>
        <?php
        if (isset($_POST['nrp'])) {
            $nrp = $_POST['nrp'];
            echo "NRP = $nrp<br>";
        }
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            echo "Password = $password<br>";
        }
        if (isset($_POST['ipk'])) {
            $ipk = $_POST['ipk'];
            echo "IPK = $ipk<br>";
        }
        ?>
    </p>
</body>

</html>