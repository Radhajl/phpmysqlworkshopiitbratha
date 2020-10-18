<html>
    <body>

        <form action="" method="post">

            <center>

                <table border=0>
                    <tr>
                        <td>
                            User Name  :
                        </td>
                        <td>
                            <input type=text name="uname">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            password  :
                        </td>
                        <td>
                            <input type=password name="pwd">
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
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $enpwd=MD5($pwd);

$sql="INSERT INTO data1 (name,pd) VALUES ('$uname','$enpwd')";
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
