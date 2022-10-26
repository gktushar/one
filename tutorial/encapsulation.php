<?php
class Class1 {
	private $num;
	function __construct(){
		$this->num=1;
	}

	// function getNum(){
	// 	return $this->num;
	// }
}

class Class2 extends Class1{
	
	function getNum(){
		return $this->num;
	}
}
$obj=new Class2();
// $obj->num=2;
echo $obj->getNum();
?>