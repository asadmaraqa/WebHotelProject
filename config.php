<?php
$username="root";
$password="";
$host="localhost";
$database="webhotelco";

$conn = new mysqli($host,$username,'',$database)  or 
die("Connection failed: " . mysqli_connect_error());
?>