
<?php

class One
{	static $a=2;

	static function increase()
	{	  // insteade of using class name we can Use self to define it :	  return self::$a + 20;	}}

class Two extends One
{
 static function a_var()
 {
 	// insteade of using parent class name we can Use Parent to define it :	echo parent::$a;
 }

 static function a_method()
 {
	echo parent::increase();
 }
}


echo "<h3>From Main class</h3>";
echo One::increase() . "<br/>";
echo One::$a . "<br/>";
echo "<h3>From sub class</h3>";
echo Two::increase() . "<br/>";
echo Two::$a . "<br/>";
echo "<h3>Inherit From Main class</h3>";
echo Two::a_var() . "<br/>";
echo Two::a_method() . "<br/>";

$mix=new Two();
echo $mix->a_method();

?>
