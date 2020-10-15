
<html>
<body>
<form  action="" method = "get">
<input type="number" name="side1">
<br>
<input type="text" name="side2"><br>
<input type="text" name="side3">
<br>
<input type = "submit" name = "s" value="Calculate">


<?php
if(isset($_GET['s']))
{
$side1=$_GET['side1'];
$side2=$_GET['side2'];
$side3=$_GET['side3'];
if(($side1==$side2)&&($side2==$side3))
       echo"Equilateral Triangle";
 else 
 {
 if(($side1==$side2)||($side2==$side3) ||($side3==$side1))

      echo "Isoceles Triangle";
  else
          echo"scalene Triangle";
  }
}
?>
</form>
   </body>
</html>
