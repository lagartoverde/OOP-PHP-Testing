<?php

	class Person {



	}

	/*$classes= get_declared_classes();
	foreach ($classes as $class) {
		echo "{$class}<br>"; 
	}*/

	if(class_exists("Animal")){
		echo "Person class has been defined.<br>";
	}else{
		echo "Person class not defined<br>";
	}

?>  