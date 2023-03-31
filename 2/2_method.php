
<?php
class Person
 {function hello()
	{	echo "how are you man ?";	} }

//method is the function inside the class

// to get all methods names inside the class :
$methods = get_class_methods('Person');
foreach($methods as $method)
{	echo $method . "<br/>";
}

// to make sure that specific method is exist in specific class :
if(method_exists('person', 'hello'))
{
	echo "method exist";
}else{
	echo "method dosen't exist";
}

?>
