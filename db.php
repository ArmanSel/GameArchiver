<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "gamearchiver";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
