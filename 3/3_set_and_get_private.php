
<?php
class Num
{// best way to handel with private variables
private $a=15;

// we can control get and set private varibale with this way
// we can set condition before the get and set so this private value will not returned until this  condition is true
public function get_a()
	{	// add condition here	 return $this->a . "<br/>";
	}
public function set_a($value)
	{
	 $this->a = $value . "<br/>";
	}

}

$v1= new Num();

echo $v1->get_a();

//set different value for 'a'
$v1->set_a(20);
//get 'a' after set the new value
echo $v1->get_a();


?>
