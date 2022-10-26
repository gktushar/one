<?php
class class1
{
	public $x = 1;
	function funl()
	{
		return $this->x++;
	}
}

$obj1=new class1();
$obj2=new class1();

echo $obj1->funl();
echo "<br />";
echo $obj1->x;

?>