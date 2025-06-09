<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logreg";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("fail" . $conn->connect_error);
}
?>