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
  $sql="select * from students";
  $res = $conn->query($sql);
  if ($res->num_rows>0)
  {
    echo "<table  border =2 height=500 width =500>";
    while($row=$res->fetch_array())
    {
        echo "<tr><td>" . $row['sid'] . "</td><td>" . $row['sname'] . "</td><td>" . $row['semail'] . "</td><td>";
    }
    echo "</table>";
  }
   echo "Connection is Successful";
}
$conn->close();
