<?php
	class person{
		function person($name,$sec,$roll){
			echo $name."<br>". $sec ."<br>". $roll."<br>";
		}
		public function random1($name,$sec,$roll){
			echo "$name <br> $sec <br> $roll<br>";
		}
		public function random2($name,$sec,$roll){
			$this->printName=$name;
			$this->printSec=$sec;
			$this->printRoll=$roll;
		}
	}

	$object=new person('Xitiz','A','41602900085');
	$object->random1('xitiz','B',"02");
	$object->random2('Rohan','C','55');
	echo $object->printName;
	echo "<br";
	echo $object->printSec;
	echo "<br";
	echo $object->printRoll;
	echo "<br";
?>
	
