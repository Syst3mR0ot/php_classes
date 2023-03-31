
<?php
class Person
 {function hello()
	{	echo "hello from inside of classs " . get_class($this) . "<br/>";	}
// method to call another method in the same class
function get_hello()
	{	$this-> hello();	} }


$person1 = new person();

$person1-> hello();

$person1-> get_hello();
?>
