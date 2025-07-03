<?php
$uid=$_GET['t1'];
$pass=$_GET['p1'];

$db=mysqli_connect("Localhost","root","","College");

$sql2= "Select userid,password from login where userid='$uid'";
$result2=mysqli_query($db,$sql2); 	
$flag=0;
while($r=mysqli_fetch_array($result2,MYSQLI_BOTH))
{
 if(($uid==$r['userid']) && ($pass==$r['password']))
 {
    $flag=1;
 }
 else
 {
    $flag=0;
 }

echo $r['password']; 
}

if($flag==1)
{
  echo "Valid User";
}
else
{
  echo " Invalid User";
}
echo  "<br>".$pass;
?>
