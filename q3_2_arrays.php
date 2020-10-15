<?php
//Matrix addition
// $mat1 contains  the elements 1,2,3,4 row wise
//$mat2 conains the elements 5,6,7,8 row wise
    $mat1=array(array(1,2),array(3,4));
    $mat2=array(array(5,6),array(7,8));

    echo "Matrix Addition <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $mat1[$i][$j]+$mat2[$i][$j]." ";
        }
        echo "<br>";
    }
?>