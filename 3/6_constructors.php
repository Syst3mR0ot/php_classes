
<?php

class Tables
{	public $legs;
	static public $total_tables=0;
	function __construct($leg_count=4)
	{	 $this->legs=$leg_count;
     Tables::$total_tables++;	}}

$table=new Tables();
echo $table->legs ."<br/><br/>";

echo  Tables::$total_tables . "<br/>";
$table=new Tables();
echo  Tables::$total_tables . "<br/>";
$table=new Tables();
echo  Tables::$total_tables . "<br/>";
$table=new Tables();
echo  Tables::$total_tables . "<br/>";
$table=new Tables();
echo  Tables::$total_tables . "<br/>";

?>
