<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>

<body>
    <?php

    $array = array("Ubaya" => "https://www.ubaya.ac.id", "Google" => "https://www.google.com", "Msn" => "https://www.msn.com", "Dell" => "https://www.dell.com");

    // print_r($array);

    ?>
    <ul>
        <li><a href="<?= $array["Ubaya"] ?>" target="_blank">Ubaya</a></li>
        <li><a href="<?= $array["Google"] ?>" target="_blank">Google</a></li>
        <li><a href="<?= $array["Msn"] ?>" target="_blank">Msn</a></li>
        <li><a href="<?= $array["Dell"] ?>" target="_blank">Dell</a></li>
    </ul>
</body>

</html>