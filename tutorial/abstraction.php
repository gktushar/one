<?php
// Abstraction class contain atleast 1 abstract function
//Abstraction function:- must declare but not implement
//Abstraction clss, child class must contain abstract function

abstract class Bank{
	abstract function kyc();
}

class DBBL extends Bank{
	function kyc(){
		echo "test";
	}
}

class CB extends Bank{
	function kyc(){
		echo "test";
	}
}

class BB extends Bank{
	function kyc(){
		echo "test";
	}
}

?>