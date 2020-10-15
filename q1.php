<html>
    <body>

        <form action="" method="post">

            <center>

                <table border=0>
                    <tr>
                        <td>
                            Name of Student :
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>
                  <tr>
                        <td>
                            Mark in each Subject is  :
                        </td>
                   <tr>

                    <tr>
                        <td>
                            subject1 :
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            subject2 :
                        </td>
                        <td>
                            <input type=text name="t3">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            subject3 :
                        </td>
                        <td>
                            <input type=text name="t4">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            subject4 :
                        </td>
                        <td>
                            <input type=text name="t5">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            subject5 :
                        </td>
                        <td>
                            <input type=text name="t6">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Submit">
                <input type=reset value="Clear form">
                           </center>
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

 if(isset($_POST['s']))//checking whether the input element is set or not
{
    $a=$_POST['t1'];
    $a1=$_POST['t2'];
    $a2=$_POST['t3'];
    $a3=$_POST['t4'];
     $a4=$_POST['t5'];
      $a5=$_POST['t6'];

    $sum=(int)$a1+$a2+$a3+$a4+$a5; //total marks
    $perc=(float)($sum/500)*100;
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<font size=8><center>Mark Sheet</center><br>";
     echo "<font size=4><center>Name     :".$a."</center><br>";
    echo "<font size=4><center>subject1 :".$a1."</center><br>";
     echo "<font size=4><center>subject2 :".$a2."</center><br>";
      echo "<font size=4><center>subject3 :".$a3."</center><br>";
       echo "<font size=4><center>subject4 :".$a4."</center><br>";
        echo "<font size=4><center>subject5 :".$a5."</center><br>";
    echo "<font size=4><center>Total obtained:".$sum." </center><br>";
    echo "<font size=4><center>Total marks: 100</center><br>";
    echo "<font size=4><center>Percentage:-".$perc."</center>";

$sql="INSERT INTO class1 (Name,sub1,sub2,sub3,sub4,sub5,totalobt,percent) VALUES ($a,$a1,$a2,$a3,$a4,$a5,$sum,$perc)";
//('xx',2,3,4,5,6,7,8)";



if (!mysqli_query($conn,$sql))

  {

 echo("Error description: " . mysqli_error($conn));

  }
  


mysqli_close($conn);

 }
 }
?>
</html>
    </body>
