<html>

<head>
  <title></title>
</head>

<body>

<?php

$a="1";
$b="2";
$c="3";

$m=array('a', 'c');
foreach($m as $h)
{	echo $$h . "<br/>";}

echo time(). "<br/>";
echo mktime(2, 30, 45, 10,5,2009);
?>

</body>

</html>