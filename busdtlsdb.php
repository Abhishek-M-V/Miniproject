<?php


include('connect.php');
$bname=$bnum=$fromadd=$toadd=$dtime=$atime=$seats="";
if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $bname=$_POST['bname'];
    $bnum=$_POST['bnum'];
    $fromadd=$_POST['fromadd'];
    $toadd=$_POST['toadd'];
    $dtime=$_POST['dtime'];
    $atime=$_POST['atime'];
    $seats=$_POST['seats'];
$sql="INSERT INTO busdtls (busname,busnumber,fromadd,toadd,departuretime,arrivaltime,seats) VALUES ('$bname','$bnum','$fromadd','$toadd','$dtime','$atime','$seats')";
if($conn->query($sql)==TRUE)
{
  header('location:index.php');
  exit();
}
else
{
  echo"error:".$sql."<br>".$conn->error;
}
}
?>