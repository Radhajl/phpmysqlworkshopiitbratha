<?php
  
  //This program displays the id , name of all the rows in the table class1
  // It also counts and displays the no. of times this page is visited.

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
$sql = "SELECT id, Name FROM class1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
  {
    echo "id: " . $row["id"]. "   Name: " . $row["Name"]."<br>";
  }
}
else
{
  echo "0 results";
}
}
mysqli_close($conn);


  // initialize a text file with name count with 0
  $file=file_get_contents("count.txt");
  $visitors=$file;
  $visitorsnew=$visitors+1;
  $filenew=fopen("count.txt","w");
  fwrite($filenew,$visitorsnew);
  echo "$visitorsnew have visited this page";

?>