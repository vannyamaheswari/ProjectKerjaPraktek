<?php
// isikan parameter koneksi databasenya
$dbhost = "register";
$dbuser = "...";
$dbpass = "...";
$dbname = "...";
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'register');
?>