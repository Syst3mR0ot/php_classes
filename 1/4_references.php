
<?php
echo "<h3>how to use references</h3>";
$a=1;
$b = $a;
$b = 2;
echo " a = " . $a . " and b = " . $b . "<br/>";
// a = 1  and b = 2

//add references & to make some thing like shortcut
$a=1;
$b =& $a;
$b = 2;
echo " a = " . $a . " and b = " . $b . "<br/>";
// a = 2  and b = 2

// to delete this reference shortcut $b but leave the main variable $a exist

unset($b);
echo " a = " . $a . " and b = " . $b . "<br/>";
// a = 2 and b = nothing

//----------------------------------------------------------------


echo "<h3>how to use references with functions</h3>";
//before referance
function ref1($var)
{
	$var = $var*2;
}
$a = 10;
ref1($a);
echo  "a = " . $a . "<br/>";
// a = 10

//after reference

function ref2(&$var)
{
	$var = $var*2;
}
$a = 10;
ref2($a);
echo  "a = " . $a . "<br/>";

//same thing when we say :

function ref3()
{	global $a;
	$a = $a*2;
}
$a = 10;
ref3();
echo  "a = " . $a . "<br/>";

//----------------------------------------------------------------


echo "<h3>how to use references with functions return value</h3>";

function ref_return1()
{
	global $a;
	$a = $a*2;
	return $a;
}
$a = 10;
$b = ref_return1();

echo " a = " . $a . " and b = " . $b . "<br/>";
$b=30;
echo " a = " . $a . " and b = " . $b . "<br/><br>";

//a = 20 and b = 20
//a = 20 and b = 30


//after ref
function &ref_return2()
{
	global $a;
	$a = $a*2;
	return $a;
}
$a = 10;
$b =& ref_return2();

echo " a = " . $a . " and b = " . $b . "<br/>";
$b=30;
echo " a = " . $a . " and b = " . $b . "<br/><br/>";

//a = 20 and b = 20
//a = 30 and b = 30

function &increment1()
{
	static $var = 10;
	$var++;
	return $var;
}
$a =& increment1();
increment1();
$a++;
increment1();
echo  "a = " . $a . "<br/>";

?>
