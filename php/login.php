<?php session_start();
include_once('../config.php');
//Coding For Signup
if(isset($_POST['submit']))
{
//Getting Psot Values
$email=$_POST['email'];	
$Password=$_POST['password'];	
$stmt = $conn->prepare( "SELECT first_name,user_name FROM users WHERE (email=? || Password=?)");
$stmt->bind_param('ss',$email,$Password);
    $stmt->execute();
    $stmt->bind_result($first_name,$user_name);
    $rs= $stmt->fetch ();
    $stmt->close();
    if (!$rs) {
  echo "<script>alert('Invalid Details. Please try again.')</script>";
  
    } 
    else {
     $_SESSION['fname']=$first_name;
      $_SESSION['uid']=$user_name;
     header('location:index.php');
    }
}

?>