
<?php
class Num
{// we can use this way with functions either
public $a=1;
private $b=2;
protected $c=3;

function get_num()
	{	 echo $this->a . "<br/>";
	 echo $this->b . "<br/>";
	 echo $this->c . "<br/>";
	}

}


class Subnum Extends Num
{var $c=22;}

$numbers = new Num();
echo $numbers->a . "<br/>";
echo "<br/>";
// and we will get error for both private and protected
//echo $numbers->b . "<br/>";
//echo $numbers->c . "<br/>";
// but we can get this values from the method in side the class
$numbers-> get_num();
echo "<br/><br/>";

//same thing happen with sub class only public is work and if we overrid variable it returns too and method form inside
//the class is work
$sub_numbers = new Subnum();
echo $sub_numbers->c . "<br/>";
$sub_numbers-> get_num();
//echo $sub_numbers->b . "<br/>";
//echo $sub_numbers->c . "<br/>";


?>
