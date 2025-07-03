<?php
$uid=$_GET['t1'];
$pass=$_GET['p1'];

$db=mysqli_connect("Localhost","root","","ganpatireg");

$sql= "Select * from register where Username='$uid'";
$result=mysqli_query($db,$sql); 	
$flag=0;
while($r=mysqli_fetch_array($result,MYSQLI_BOTH))
{
 if(($uid==$r['Username']) && ($pass==$r['Password']))
 {
     $flag=1;
 }
 else
 {
     $flag=0;
 } 
 
}
if($flag==1)
{
     echo header('Location:Detail.html');
}
else
{
    echo header('Location:invalid.html');
}



?>



