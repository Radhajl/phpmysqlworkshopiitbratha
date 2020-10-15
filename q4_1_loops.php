<?php
// print 5*s in the 1st row, 4 *s in the 2nd row....1 *in the 5th row
for($i=0;$i<5;$i++)
{  
for($j=5-$i;$j>=1;$j--)
{  
echo "* ";  
}
echo "<br>";  
}  
?>