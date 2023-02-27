<?php
	$m = 0;
	$a = 0;
	$b = 1;
	echo "febonacci series";
	echo $a . " " .$b . " ";
	for($i=3;$i<=16;$i++)
	{
		$c = $a + $b;
		echo $c." ";
		$a= $b;
		$b = $c;
	}
?>
