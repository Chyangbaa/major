<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "signup";

$con = mysqli_connect($server, $user, $password, $db);
$result = mysqli_query($con, "SELECT * FROM users");
?>