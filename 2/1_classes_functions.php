<?php
// function to show all classes
$m= get_declared_classes();
foreach($m as $a)
{
/* �� �������
  foreach
  �� ������ ����� �� ������ ���� ��� ��������� ��������
*/

//Function to make sure that class Exist or not
if(class_exists(SoapHeader))
{
	echo "class Exist";
}else{
?>