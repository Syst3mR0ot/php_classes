
<?php
class Person
 {
// to define variable name inside the class we must but var in front of it :
var $first_name;
var $last_name;
// variable with default value
var $arms_count = 2;
var $legs_count = 2;

function hello()
	{	echo "hello from inside of classs " . get_class($this) . "<br/>";	}
// method to call another method in the same class
function full_name()
	{	return "this person name is " . $this->first_name . " " . $this->last_name . " .<br/>";	} }

// instance with default values
$person1 = new person();
echo "default \$person1 had " . $person1->arms_count ." arms and " . $person1->legs_count . " legs. <br/>";

$person1->first_name = 'Ahmed';
$person1->last_name = 'Kandel';
echo $person1->full_name();

// Another instance with different values
$person2 = new person();
$person2->arms_count = 3;
$person2->legs_count = 3;
$person2->first_name = 'max';
$person2->last_name = 'Payne';

echo "<br/>" . $person2->full_name() . " and he had " . $person2->arms_count . " arms and " . $person2->legs_count . " legs. <br/><br/>";

// to get all variables and there values inside the class :
$vars = get_class_vars('Person');
foreach($vars as $var_name=>$value)
{echo "{$var_name} : {$value} <br/>";}

// make sure that property is exist with boolean way :
echo property_exists('Person', 'first_name')? 'true' : 'false';
// echo true
?>
