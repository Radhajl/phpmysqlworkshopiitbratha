<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="result";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
$sql="UPDATE class1 SET sub5=99 WHERE Name = 'Rohan'";



if (!mysqli_query($conn,$sql))

  {

 echo("Error description: " . mysqli_error($conn));

  }



mysqli_close($conn);

 }

?>