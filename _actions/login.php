<?php 
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

if($email==="sana@gmail.com" and $password==="sana123"){
    $_SESSION['user']=['username'=>"Minatozaki Sana"];
    header("location: ../profile.php");
}else{
    header("location: ../?incorrect=1");
}


