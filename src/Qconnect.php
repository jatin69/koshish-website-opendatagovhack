<?php

//setup your credentials

//-------------------------------------------------------------------

// hosted db credentials (if hosting)

$your_username = "id3182218_koshish";
$your_password = "koshish";
$your_database_name = "id3182218_koshish";

// localhost credentials

//$your_username = "root";
//$your_password = "";
//$your_database_name = "id3182218_koshish";

//-------------------------------------------------------------------

$servername = "localhost";
$username = $your_username;
$password = $your_password;

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// select database
mysql_select_db($your_database_name, $conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
