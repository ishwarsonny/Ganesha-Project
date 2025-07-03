<?php
$user=$_GET['t1'];
$pass=$_GET['p1'];

$db=mysqli_connect("localhost","root","","employee");
$sql="SELECT * FROM emp;
$result=mysql_query($db,$sql);
$flag=0;
while($r=mysql_fetch_array($result,MYSQLI_BOTH))
{
if((userid='$user') && (password='$pass'))
{
  $flag=1;
}
else
{
$flag=0;
}  