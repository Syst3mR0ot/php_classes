
<?php
class Students
{
	static $total_students=15;

// with static method we cannot use '$this->'
	static public function add_student()
		{

	 	Students::$total_students++;
		}

	static function greeting($var='hello')
		{	 	echo "{$var} student. <br/>";
		}

}

// we use static with variables like the folwing :
echo Students::$total_students . "<br/>";
/* this equal when we say :
$students = new Students();
echo $students->total_students;
*/

// and with methods :
echo Students::greeting('how are you');

// static classes inheritance Example :

class One
{	static $a;}

class Two extends One
{

}
class Three extends One
{

}

One::$a=1;
Two::$a=2;
Three::$a=3;

echo One::$a;
echo Two::$a;
echo Three::$a;

// this all echo '3' as a value
?>
