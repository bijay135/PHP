<?php
	
	function statictest(){
		static $x = 0;
		echo $x;
		$x++;
	}	
	staticTest();
	echo"<br>";
	staticTest();
	echo"<br>";
	staticTest();
	echo"<br>";
 ?>