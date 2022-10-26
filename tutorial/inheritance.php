<?php
class Class1{
	function __construct(){
		// echo "Construct1";
		$this->num=1;
	}

	function fun1(){
		echo "Fun1";
	}
}

/**
 * 
 */
class Class2 extends Class1
{
	function __construct(){

		echo "Construct2";

		parent::__construct();
		$this->num=2;
	}

	function fun1(){
		echo "Fun2";
	}
}

$obj1=new Class2();
echo $obj1->num;
?>