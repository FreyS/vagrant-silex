<?php

$calc = new Rechner;

for($i = 0; $i <= 10; $i ++)
{
	echo "$i + $i = " . $calc -> add($i) . "<br>";
	echo "$i * $i = " . $calc -> mul($i) . "<br>";
	echo "$i! = " . $calc -> fak($i) . "<br>";
	echo "<hr>";
}

class Rechner
{
	function add ($n)
	{
		return $n + $n;
	}
	
	function mul($n)
	{
		return $n * $n;
	}
	
	function fak ($n)
	{
		return $n * $this -> fak($n - 1);
	}
}