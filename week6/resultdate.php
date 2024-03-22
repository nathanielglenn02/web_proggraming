<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULT</title>
</head>

<body>
    <?php

    if (isset($_POST["btnSubmit"])) {
        $date1 = $_POST["date1"];
        $date2 = $_POST["date2"];

        echo $date1 . "<br>";
        echo $date2 . "<br>";
    }

    ?>
</body>

</html>