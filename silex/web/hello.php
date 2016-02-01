<?php
echo "Hello World!";
echo "<br>";
echo "The server time is" . time();
echo "<hr>";
for ($i = 0; $i <10; $i++)
{
	if ($i % 2 == 0)
	{
		echo $i . " even <br>";
	}
	else
	{
		echo $i . " odd <br>";
	}
}
echo "<hr>";
$countrys = array (
	"Germany" => "Berlin",
	"France" => "Paris",
	"Belfium" => "Brussels"
);

foreach($countrys as $key => $value)
{
	echo " The Capital of $key is " . $value . "<br>";
}
echo "<br>";
?>