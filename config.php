<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_rgister_pure_coding";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>