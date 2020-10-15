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
            </center>
            <?php
if(isset($_POST['s']))//checking whether the input element is set or not
{
    $a=$_POST['t1'];
    $a1=$_POST['t2'];
    $a2=$_POST['t3'];
    $a3=$_POST['t4'];
     $a4=$_POST['t5'];
      $a5=$_POST['t6'];

    $sum=$a1+$a2+$a3+$a4+$a5; //total marks
    $perc=($sum/500)*100;

    echo "<br>";
    echo "<font size=4><center>Total mark obtained is:</center><br>";
    echo "<font size=4><center>Total marks:-".$sum."</center><br>";
    echo "<font size=4><center>Percentage is:-".$perc."</center>";
}
            ?>
        </form>
    </body>
</html>
