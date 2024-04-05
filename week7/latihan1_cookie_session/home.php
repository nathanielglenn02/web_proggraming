<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Home</h1>
    <p>Halo, <?php echo $_SESSION['username'] ?></p>
    <p><a href="logout.php">Log Out</a></p>
</body>

</html>