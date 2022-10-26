<?php
class Class1{
	static public $num=10;
	public $num2=20;
	static function fun1(){
		echo "Test";
	}

	static function fun2(){
		echo self::$num;
	}
}

echo Class1::$num;
echo "<br/>";
echo Class1::fun1();
echo "<br/>";
echo Class1::fun2();
?>