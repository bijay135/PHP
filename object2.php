<?php
	class Student{
		public $name;
		function _constructor($name){
			$this->name=$name;//using this to access student's name
		}
	}
	$tom=new Student();
	$tom->_constructor('tom');
	echo $tom->name;
?>