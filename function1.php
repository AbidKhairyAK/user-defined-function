<?php

	function msg(){
		echo "hello world!.<br>";
	}
	msg();
	
	echo "<br>";
	
	function gimp($play){
		echo "$play Refnes.<br>";
	}
	$array = array("abid","yahya","Muhammad","Bilal","Ammar","Dika");
	$al = sizeof($array);
	for($x=0;$x<$al;$x++){
		gimp("$array[$x]");
	}
	
	echo "<br>";
	
	function setHeight($minheight = 50) {
		echo "The height is : $minheight <br>";
	}
	setHeight(350);
	setHeight(); // will use the default value of 50
	
	echo "<br>";
	
	function sum($x, $y) {
		$z = $x + $y;
		return $z;
	}
	echo "5 + 10 = " . sum(5, 10) . "<br>";
	
	echo "<br>";
	
	function pribadi($nama="abid",  int $umur=15){
		echo "nama saya : $nama <br> Umur saya : $umur";
	}
	pribadi();
?>