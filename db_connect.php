<?php

$username = "root";
$password = "";
$dbname = "myDB1";
$servername="localhost";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
?>