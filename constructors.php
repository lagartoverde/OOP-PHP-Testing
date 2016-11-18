<?php

	class Table{

		public $legs;
		static public $total_tables=0;

		function __construct($leg_count=4){
			$this->legs=$leg_count;
			Table::$total_tables++;
		}

		function __destruct(){
			Table::$total_tables--;
		}

	}

	$table=new Table(6);
	echo $table->legs."<br>";

	echo "<br>"; 

	echo Table::$total_tables."<br>";
	$t1=new Table();
	echo Table::$total_tables."<br>";
	$t2=new Table();
	echo Table::$total_tables."<br>";
	

?>  