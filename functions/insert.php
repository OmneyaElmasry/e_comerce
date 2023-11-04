<?php
if($_SERVER['REQUEST_METHOD']!== "POST") {
  header("location:../users.php");
  exit();
}

$username=$_POST['username'];
$password=md5($_POST['password']);
$address=$_POST['address'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$privileges=$_POST['privileges'];

include "connect.php";
$insert="INSERT INTO users 
         (username,password,address,email,gender,privileges)
         VALUES
         ('$username','$password','$address','$email','$gender','$privileges')";
         $query=$conn->query($insert);
         if($query){

            header("location:../users.php");
         }else {

           echo $conn->error;
         }