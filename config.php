<?php 

// $server = "localhost:3307";
// $user = "root";
// $pass = "";
// $database = "login_register_pure_coding";

$conn = mysqli_connect('localhost:3307','root','','login_register_pure_coding');

//$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>