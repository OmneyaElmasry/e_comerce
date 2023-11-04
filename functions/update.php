<?php


if($_SERVER['REQUEST_METHOD']!== "POST") {
  header("location:../users.php");
  exit();
} 

$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$privileges=$_POST['privileges'];

include "connect.php";

  if (!empty($_POST['password'])){
    $pass=md5($_POST['password']);
    $update_pass="UPDATE users SET password ='$pass' WHERE id=$id";
    $query_pass=$conn->query($update_pass);


  }
$update="UPDATE users SET 
   username='$username',
     address='$address',
     email='$email',
     gender='$gender',
     privileges='$privileges'
WHERE id=$id
";
$query=$conn->query($update);
if($query){

   header("location:../users.php");
}else { 

  echo $conn->error;
}