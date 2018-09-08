<?php
if(isset($_POST['submit'])){
	$n1=$_POST["num1"];
	$n2=$_POST["num2"];
	$operator=$_POST["operator"];
}
	switch ($operator) {
		case 'add':
			$add=$n1+$n2;
			echo "Sum of numbers=".$add;
			break;
		case 'sub':
			$sub=$n1-$n2;
			echo "Sub of numbers=".$sub;
			break;
		case 'mul':
			$mul=$n1*$n2;
			echo "mul of numbers=".$mul;			
			break;
		case 'div':
			$div=$n1/$n2;
			echo "div of numbers=".$div;
			break;
		
		default:
			echo "Wrong operator or value...";
			break;
	}
?>