<?php
include('connect.php');
$uname=$add=$number=$email=$vehname=$vehnumber=$licensenumber=$licensephoto=$pwd="";
if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $uname=$_POST['name'];
    $add=$_POST['Address'];
    $number=$_POST['phone'];
    $email=$_POST['email'];
    $vehname=$_POST['vname'];
    $vehnumber=$_POST['vnumber'];
    $licensenumber=$_POST['lnumber'];
    $licensephoto=$_POST['document'];
    $pwd=$_POST['password'];
$sql="INSERT INTO busowner_register (name,address,phonenumber,emailid,vehiclename,vehiclenumber,licensenumber,uploadlicense,password, status) VALUES 
('$uname','$add','$number','$email','$vehname','$vehnumber','$licensenumber','$licensephoto','$pwd', 'unverified')";
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