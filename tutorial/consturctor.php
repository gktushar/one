<?php
/**
 * constructor destructor & manual function method
 */
class Class1 {
	function __construct($x, $y, $z){
		$this->a=$x;
		$this->b=$y;
		$this->c=$z;
	}

	function funl(){
		echo $this->a." & ".$this->b." & ".$this->c;
	}

	function __destruct(){
		// echo "End";
	}
}

$obj1=new Class1(20, 10, 12);
$obj1->funl();
?>