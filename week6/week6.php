<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6</title>
</head>

<body>
    <?php

    $temp = array();
    $arr = array(3, 5, 7);
    print_r($arr);
    echo "<br>";
    echo $arr[1] . "<br>";

    if (isset($arr[4])) {
        echo $arr[4] . "<br>";
    }

    $arr[] = 9;
    echo $arr[3] . "<br>";
    $arr[5] = 11;
    echo $arr[5] . "<br>";
    $arr[] = 13;
    echo $arr[6] . "<br>";
    $arr[4] = 15;
    unset($arr[3]);
    unset($arr[6]);
    $arr[] = 17;
    $arr[0] = 1;
    $arr[1] = "Halo";
    $arr["X"] = "Apa Kabar";
    print_r($arr);

    echo "<br>";
    echo "<br>";
    $arr2 = array(4 => 3, "A" => 5, "X" => 7, 9);

    foreach ($arr2 as $key => $isinya) {
        echo $key . " = " . $isinya . "<br>";
    }
    print_r($arr2);
    echo "<br>";

    $fav = array(
        "makanan" => array("rawon", "bakso", "rujak"),
        "minuman" => array("kopi", "jamu")
    );

    echo $fav["makanan"][1] . "<br>";
    $fav["minuman"][] = "es teh";

    echo "<br>";
    foreach ($fav as $jenis => $arr_isinya) {
        echo $jenis . ":";
        echo "<ul>";
        foreach ($arr_isinya as $isi) {
            echo "<li>$isi</li>";
        }
        echo "</ul>";
    }


    ?>
</body>

</html>