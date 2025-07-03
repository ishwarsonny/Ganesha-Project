<? php

$db=mysqli_connect("Localhost","root","","employee");
$sql="CREATE TABLE Emp(".
     "EmpID INT,".
     "EmpName TEXT,".
     "Salary INT".
     ")";
$result=mysqli_query($db,$sql);
if(!$result){
  
  echo("<P>Error creating student table".
      "dattabase server at time.</P>");
  exit();
}
  