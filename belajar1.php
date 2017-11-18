<?php
	$x = array(1,2,4,6,9,13,10,9,17,99);
	
	$x_len = sizeof($x);
	
	foreach ($x as $y){
		if($y%2==0):
			echo $y." adalah bilangan genap <br>";
		else:
			echo $y." adalah bilangan ganjil <br>";
		endif;
	}
?>