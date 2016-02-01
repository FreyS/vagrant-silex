<?php
echo "<h1>Hallo world!</h1>" ;
echo "<hr>";

$k = 1;
$l = 9;

for ($i = 0; $i <= $l; $i ++)
{
	echo $i . "! = ";
	
	if($i <= 1)
	{
		echo "1 <br>";
	}
	
	else
	{
		for ($j = 1; $j <= $i; $j ++)
		{
			$k = $k * $j;
		}
		
		echo $k . "<br>";
	}
	$k = 1;
	
}
