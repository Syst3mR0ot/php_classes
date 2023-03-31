
<?php

class CloneTest
{	public $juice;
}



$a=new CloneTest();
$a->juice = "orang";
$b = $a;
$b->juice = "lim";
echo $a->juice . "<br/>";

// clone keep the last value of $a without change
$c = clone $a;
$c->juice = "appel";
echo $c->juice . "<br/>";
echo $a->juice . "<br/>";

?>
