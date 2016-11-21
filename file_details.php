<?php

	$filename="filetest.txt";

	echo filesize($filename)."<br>";

	//file time related details
	//filemtime: last modified(changed content)
	//filectime: last changed(changed content or metadata)
	//fileatime: last accessed(any read/change)

	echo strftime("%d%m%Y %H:%M",filemtime($filename))."<br>";
	echo strftime("%d%m%Y %H:%M",filectime($filename))."<br>";
	echo strftime("%d%m%Y %H:%M",fileatime($filename))."<br>";

	touch($filename);

	$path_parts=pathinfo(__FILE__);
	echo "<pre>";
	print_r($path_parts);
	echo "</pre>";

?>