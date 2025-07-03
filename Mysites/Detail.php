<?php
$name=$_GET['t1'];
$gender=$_GET['r1'];
$date=$_GET['d1'];
$mobile=$_GET['n2'];



$db=mysqli_connect("localhost","root","","ganpatireg");

$sql="INSERT INTO cart VALUES('$name','$gender','$date','$mobile','','','','','')";

$result=mysqli_query($db,$sql);


echo header('Location:homepage.html')















?>