<?php
class Cars
 {
var $wheels = 4;
var $doors = 4;

function wheelsdoors()
	{	return $this->wheels + $this->doors;	}
}

// sub class from the main class Cars
class ExCars extends Cars
{// override	variable valuevar $doors = 2;
// override method
function wheelsdoors()
	{
	return $this->wheels + $this->doors + 100;
	}
}

$car1 = new Cars();
$car2 = new ExCars();
echo $car1->wheels . "<br/>";
echo $car1->doors . "<br/>";
echo $car1->wheelsdoors() . "<br/>";
echo "<br/>";
echo $car2->wheels . "<br/>";
echo $car2->doors . "<br/>";
echo $car2->wheelsdoors() . "<br/>";
echo "<br/>";

// to get the parent class name for sub class :
echo "Parent Class For the ExCars Class is : " . get_parent_class('ExCars') . "<br/>";

// to make sure the specific class is the parent class for sub class or not use :
echo is_subclass_of('ExCars', 'Cars')? 'yes' : 'no';
?>
