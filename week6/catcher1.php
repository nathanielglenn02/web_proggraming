<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catcher</title>
</head>

<body>
    <select size="10">
        <?php
        if (isset($_POST["hero"])) {
            $arr_hero = $_POST["hero"];
            foreach ($arr_hero as $hero) {
                if ($hero) {
                    echo "<option>$hero</option>";
                }
            }
        }
        ?>
    </select>
</body>

</html>