<?php
include "../dbconnection.php";

if(isset($_POST['submit'])) {
  $full_name=$_POST['name'];
$username=$_POST['user'];
  $email=$_POST['email'];
  $password=$_POST['password'];


  $sql="INSERT INTO user(fullname,username,email,password)values(?,?,?,?,?)";
  $stmt=$conn->prepare($sql);
  $stmt->execute([$full_name,$username,$email,$password]);
  echo "Record Inserted Successfully";
  header("Refresh:2;URL=../index.php");

}else {
echo "Welcome>>>PLEASE Enter Your Data";
header("Refresh:2;URL=login.php");
};


?>