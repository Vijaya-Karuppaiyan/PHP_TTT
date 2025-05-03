<?php
$server ="localhost";
$username ="root";
$password = "root";
$dbname = "mydb";

//$conn = new mysqli($server,$username,$password, $dbname); or
$conn = mysqli_connect($server,$username,$password, $dbname);

if ($conn->connect_error)
{
   echo "Connection failed due to ".$conn->connect_error;
}
else
{
  $sql="insert into students(sname, semail) values('Bob', 'bom@gmail.com')";
  $res = $conn->query($sql);
   echo $res ."record is inserted </br>";
   echo "Connection is Successful";
 }
$conn->close();
