<?php
	class Books{
		function Books(){
			$this->model="Internet Programming";
		}
	}
	$IP=new Books();//create an object.
	echo $IP->model;//show object properties
	echo "<br>";
?>