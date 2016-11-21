<?php
	
	echo fileowner("file_permissions.php")."<br>";
	$owner_id=fileowner("file_permissions.php");
	$owner_array=posix_getpwuid($owner_id);
	echo $owner_array['name']."<br>";
	echo "<pre>";
	print_r($owner_array);
	echo "</pre>";


	chown("file_permissions.php","oscarrodriguez");
	//chown only works if PHP is superuser aand
	//making webserver/PHP a superuser is a big security issue

	$owner_id=fileowner("file_permissions.php");
	$owner_array=posix_getpwuid($owner_id);
	echo $owner_array['name']."<br>";
	echo "<pre>";
	print_r($owner_array);
	echo "</pre>";
	echo substr(decoct(fileperms("file_permissions.php")),2);
	chmod("file_permissions.php",0444);
	echo "<br>";
	echo substr(decoct(fileperms("file_permissions.php")),2);
	echo  "<br>";
	echo is_readable("file_permissions.php") ? "yes":"no";
	echo "<br>";
	echo is_writable("file_permissions.php") ? "yes":"no";
	echo "<br>";
?>