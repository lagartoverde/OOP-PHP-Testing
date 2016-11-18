<?php

	class Person {

		function say_hello(){
			echo "Hello from inside a class<br>";
		}

	}

$person = new Person();
$person2 = new Person();

echo get_class($person)."<br>";

if(is_a($person,"Person")){
	echo "Yep, it's a Person <br>";
}else{
	echo "It's not a person<br>";
}

echo "<br>";

$person->say_hello();

?>  