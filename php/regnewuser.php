<?php
include('../config.php');

$user_name = $_POST["user_name"];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = "NormalUser";




if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {

    $sql=$conn->prepare("SELECT user_name,email FROM users WHERE user_name=? OR email=?");
    $sql->bind_param("ss",$user_name,$email);
    $sql->execute();
    $result=$sql->get_result();
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['user_name']==$user_name){
     echo "Username not available try different!";
    }
    elseif($row['email']==$email){
     echo "Email already registered try different!";
    }
   else{

	
    $stmt = $conn->prepare("insert into users(user_name, first_name, last_name, email, password,role) values(?, ?, ?, ?,?,?)");
    $stmt->bind_param("ssssss", $user_name, $firstName, $lastName, $email, $password,$role);
    $execval = $stmt->execute();

    header('location:../pages/login_newuser.html?status=success');
    $stmt->close();
    $conn->close();}


        # code...
    }



?>