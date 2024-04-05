<?php
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "glenn" && $password = "1234") {
        if (isset($_POST['remember'])) {
            setcookie("remember", $username, time() + 600);
        } else {
            setcookie("remember", "", time() - 1);
        }
        $_SESSION['username'] = $username;
        header("location: home.php");
    } else {
        header("location: login.php?err=1");
    }
} else {
    header("location: login.php");
}
