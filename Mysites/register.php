<?php 

$name=$_GET['t1'];
$uname=$_GET['t2'];
$email=$_GET['e1'];
$password=$_GET['p1'];
$cpassword=$_GET['p2'];
$db=mysqli_connect("Localhost","root","","ganpatireg");
$sql="INSERT INTO register VALUES ('$name','$uname','$email','$password','$cpassword')";
$result=mysqli_query($db,$sql);
echo header('Location:login.htm');
?>