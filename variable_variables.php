<html>
	<head>
		<title>Variable Variables</title>
	</head>
	<body>
		<?php
			$a="hello";
			$hello="hello everyone";
			echo "{$a}<br>";
			echo "{$hello}<br>";
			echo $$a."<br>";
		?>
		<br>
		<?php
			$a='Kevin';
			$b='Mary';
			$c='Joe';
			$d='Larry';
			$e='Audrey';

			$students=array('a','c','e');
			foreach ($students as $seat) {
				echo $$seat."<br>";
			}
		?>
		<br>
		<?php
			//Does $$var[1] mean:
			//#1. Get the first element and then evaluate dinamically?
			//or
			//#2. evaluate dinamically and then get the first element?
			//Use the curly braces {} to make it clear
			//echo ${$var[1]}; for #1
			//echo ${$var}[1]; for #2
		?>
	</body>
</html>