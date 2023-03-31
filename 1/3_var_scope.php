<html>

<head>
  <title></title>
</head>

<body>

<?php

$var=1;
function test1()
{	$var=2;
	echo $var . "<br/>";}
test1();
echo $var . "<br/>";
echo "<hr/>";

// echo 1 and 2
// ----------------------------------------------------------

$var=1;
function test2()
{
	global $var;
	$var=2;
	echo $var . "<br/>";
}
test2();
echo $var . "<br/>";
echo "<hr/>";
// echo 2 and 2
// ----------------------------------------------------------

$var=1;
function test3()
{
	$var=2;
	echo $var . "<br/>";
	$var++;
}
test3();
test3();
test3();
echo $var . "<br/>";
echo "<hr/>";

// echo 2 ,2 ,2 and 1
// ----------------------------------------------------------


$var=1;
function test4()
{
	static $var=2;
	echo $var . "<br/>";
	$var++;
}
test4();
test4();
test4();
echo $var . "<br/>";
// echo 2 ,3 ,4 and 1
// ----------------------------------------------------------


?>

</body>

</html>