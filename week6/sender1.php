<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sender</title>
</head>

<body>
    <form action="catcher1.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "
            <p>
        <input type=\"text\" name=\"hero[]\">
            </p>    
        ";
        }
        ?>
        <input type="submit" name="btnKirim" value="kirim">
    </form>

    <form action="catcher2.php" method="post">
        <?php
        $heroes = array("Batman", "Spiderman", "Ironman", "Superman");
        foreach ($heroes as $hero) {
            echo "<input type =\"checkbox\" name = \"hero[]\" value=\"value=$hero\"> <label>$hero</label><br>";
        }
        ?>
        <input type="submit" name="btnKirim" value="kirim">
    </form>


</body>

</html>