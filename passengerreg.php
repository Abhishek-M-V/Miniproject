<?php
include('connect.php');
$uname=$add=$number=$email=$dob=$pwd="";
if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $uname=$_POST['name'];
    $add=$_POST['Address'];
    $number=$_POST['phone'];
    $email=$_POST['email'];
    $dob=$_POST['date_of_birth'];
    $pwd=$_POST['password'];
$sql="INSERT INTO passenger_register (name,address,phonenumber,emailid,dateofbirth,password) VALUES ('$uname','$add','$number','$email','$dob','$pwd')";
if($conn->query($sql)==TRUE)
{
  header('location:index.php');
}
else
{
  echo"error:".$sql."<br>".$conn->error;
}
}
?>