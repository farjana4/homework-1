<?php
function my_sort($a,$b)
{
	echo $a.'--'.$b.'<br>';
if ($a==$b) return 0;
return ($a<$b)?-1:1;
}

$a=array(1,10,11,12,123,12,2,21,22,3,3331,4);
usort($a,"my_sort");

$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
   {
   echo $a[$x];
   echo "<br>";
   }
?>