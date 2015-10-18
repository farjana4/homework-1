<?php

echo '<p align="right">';
for($i=0; $i<=4; $i++)
	{//echo $i.'<br>';
		for($j=1; $j<=($i<5?$i+1:$i); $j++)
		{
			echo '*';
		}
		echo '<br>';
	}
echo "</p><hr>";

?>