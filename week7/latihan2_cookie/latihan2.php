<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lat 2</title>
</head>

<body>
    <form method="post" action="latihan2_proses.php">
        <p><input type="text" name="username" placeholder="Username"></p>
        <p> <input type="email" name="email" placeholder="Email"></p>
        <p><input type="radio" name="gender" value="pria" id="pria"><label for="pria">Pria</label></p>
        <p><input type="radio" name="gender" value="wanita" id="wanita"><label for="wanita">Wanita</label></p>
        <input type="submit" name="kirim" value="kirim">
    </form>
    <?php 
if (isset($_COOKIE['user'])){
    $arr_user = $_COOKIE['user'];
    echo "Username = ".$arr_user["name"]."<br>";
    echo "email = ".$arr_user["email"]."<br>";
    echo "Gender = ".$arr_user["gender"]."<br>";
    
}
?>
</body>

</html>