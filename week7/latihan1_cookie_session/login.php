<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    $username = $_COOKIE['remember'] ? $_COOKIE['remember'] : "";
    $checked = empty($username) ? "" : 'checked';
    if (isset($_GET['err'])) {
        if ($_GET['err'] == 1) {
            echo "
                <p style='color:red;'>Salah Username/Password</p>
            ";
        }
    }
    ?>
    <form action="login_proses.php" method="post">
        <p>
            <input type="text" name="username" placeholder="Username" value="<?php echo $username ?>">
        </p>
        <p>
            <input type="password" name="password" placeholder="Password">
        </p>
        <p>
            <input type="checkbox" name="remember" value="1" id="remember">
            <label for="remember">Remember Username</label>
        </p>
        <p>
            <input type="submit" name="login" value="Log in">
        </p>
    </form>
</body>

</html>