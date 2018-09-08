<?php
	$cookie_name = "Obstacles";
	$cookie_value = "4th semester";
	setcookie($cookie_name,$cookie_value,time()+3600);
	if(!isset($_COOKIE[$cookie_name])){
		echo"Cookie is not set";
	}
	else{
		print_r($_COOKIE);
		exit();
		echo"cookie name= ".$cookie_name;
		echo nl2br ("\n cookie value= ".$cookie_value);
	}
?>