<?php
if (isset($_POST['kirim'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    setcookie("user[name]", $username, time() + 600);
    setcookie("user[email]", $email, time() + 600);
    setcookie("user[gender]", $gender, time() + 600);
}
header("location: latihan2.php");
