<?php
class Person
 {function hello()
	{	echo "hello from inside of the classs. ";	} }

// Tow different instances for the same class
$person1 = new person();
$person2 = new person();

// get the class for specific instance
echo get_class($person1)."<br/>";

// how to make sure that instance belong to the class
if(is_a($person1, 'person'))
{echo "yes it's <br/>";}else{echo "no it's not <br/>";}

$person1-> hello();

?>
