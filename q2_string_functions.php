<html>
    <body>
        <form action="" method="post">
 <table border=0>
                    <tr>
                        <td>
                            Enter a String :
                        </td>
                        <td>
                            <input type=text name="st">
                        </td>
                    </tr>
                    </table>
                <br>
                <br>
                <input type=submit name="sub" value="Submit">


 <?php
if(isset($_POST['sub']))
{
  $s=$_POST['st'];
 $len=strlen($s);
echo nl2br("\n\n Length of the given string is $len\n");
$splits=explode(" ",$s);
echo nl2br("\n The string put in array is\n");
for ($i=0;$i<count($splits);$i++)
 {
echo $splits[$i]; echo nl2br("\n");

}
  $revstr =strrev($s);
  echo nl2br("\n The reversed string is\n");
  echo "$revstr";echo nl2br("\n");

$lower=strtolower($s);$upper=  strtoupper($s);
echo nl2br("\n The given  string in upper case is\n");
   echo "$upper";echo nl2br("\n");
   echo nl2br("\n The given  string in lower case is\n");
   echo "$lower";echo nl2br("\n");
   // define the substring as Sir and replace mam in the original string to Sir
   echo   nl2br("\nmam in original string is replaced by sir \n");
     echo   str_replace("mam","Sir", $s);
     echo nl2br("\n");
  }
  else
  {
    echo"";
  }
?>
</form>
</body>
</html>