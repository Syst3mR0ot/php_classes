<?php
// function to show all classes
$m= get_declared_classes();
foreach($m as $a)
{	echo $a  . "<hr/>";}
/* Êã ÃÓÊÎÏÇã
  foreach
  Çä ÇáäÇÊÌ ÚÈÇÑÉ Úä ãÕÝæÝÉ äÑíÏ ÚÑÖ ãÍÊæíÇÊåÇ ÈÇáÊÑÊíÈ
*/

//Function to make sure that class Exist or not
if(class_exists(SoapHeader))
{
	echo "class Exist";
}else{	echo "class dosen't exist";}
?>
