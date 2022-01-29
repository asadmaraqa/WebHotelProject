<?php
include('../config.php');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$email = $_POST['email'];
$message = $_POST['message'];
$number = $_POST['number'];
$date = date('Y-m-d H:i:s');


if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into contact(firstName, lastName, email, message, number,datespotted) values(?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssssis", $firstName, $lastName, $email, $message, $number,$date);
    $execval = $stmt->execute();
    
    header('location:../pages/contact.html?status=success');
    $stmt->close();
    $conn->close();
}




?>