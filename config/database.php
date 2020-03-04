<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = mysqli_connect($host, $username, $password, $database);

if(mysqli_connect_errno()){
    echo "Failed to connect to mysql: ". mysqli_connect_error();
    exit();
}
