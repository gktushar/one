<?php
//Interface support multiple inheritence
//Interface can only contain abstract function
//In interface we can not define variables
//No constructor is Interface
//All function must be public
//Interface support multiple inheritence
interface Class1{
	public function test1();
}

interface Class2{
	public function test2();
}

class Class3 implements Class1,Class2{
	public function  test1(){
		echo "Test1";
	}

	public function  test2(){
		echo "Test2";
	}
}


$obj=new Class3();
echo $obj->test1();
?>