<?php

	echo getcwd()."<br>";

	mkdir("new",0777);

	//default umask 0022 that changes 0777 to 0755

	//recursive dir creation
	mkdir("new/test2/test3",0777,true);

	//changing dirs
	chdir("new");
	echo getcwd()."<br>";

	//removing a directory
	rmdir("test2/test3")

?>