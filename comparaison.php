<?php

	class Box{

		public $name="box"; 

	}

	$box=new Box();

	$box_reference=$box;
	$box_clone=clone $box;

	$box_changed=clone $box;
	$box_changed->name="changed box";

	$another_box=new Box();

	echo $box==$box_reference ? "true":"false"; //true
	echo "<br>";
	echo $box==$box_clone ? "true":"false";	//true
	echo "<br>";
	echo $box==$box_changed ? "true":"false"; //false
	echo "<br>";
	echo $box==$another_box ? "true":"false"; //true
	echo "<br><br>";


	echo $box===$box_reference ? "true":"false"; //true
	echo "<br>";
	echo $box===$box_clone ? "true":"false";	//false
	echo "<br>";
	echo $box===$box_changed ? "true":"false"; //false
	echo "<br>";
	echo $box===$another_box ? "true":"false"; //false
	echo "<br><br>";




?>  