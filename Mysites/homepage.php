<?php

$kg=$_GET['t1'];
$price=$kg*349;




$db=mysqli_connect("localhost","root","","ganpatireg");

$sql="INSERT INTO cart VALUES(4,'Motichur Laddu',349.00,'$kg','$price')";

$result=mysqli_query($db,$sql);

$sql2="SELECT * FROM cart where ";
 
$result2=mysqli_query($db,$sql2);

while($row=mysqli_fetch_array($result2))
{
  echo $row["Quantity"];
}


?>