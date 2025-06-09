<?php
session_start();
include("connection.php");

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE usr = '$username' AND passwd = '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['usr'] = $username;
    $_SESSION['passwd'] = $password;

    header('Location:home.php');
    exit();
} else {
    header('Location:index.php');
    exit();
}
?>