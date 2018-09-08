<?php
	
	function printArray($array){
		foreach($array as $value){
			echo "value is $value <br>";
		}
		foreach($array as $key =>$value){
		echo "$key is $value <br>";
		}
	}
	//$arr=array(1,2,3,4,5);
	
	$arr=array("a"=>"1","b"=>"2","c"=>"3","d"=>"4","e"=>"5");
	printArray($arr);
	

?>
