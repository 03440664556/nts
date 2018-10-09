<?php 

if(!isset($_SESSION)){
	session_start();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nts";

// $servername = "codestudio.com.pk";
// $username = "codestud_admin";
// $password = "CodeStudio@3128_";
// $dbname = "codestud_codestudio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} ?>

