<?php
	$file="filetest.txt";
	if($handle=fopen($file,"r")){
		$content=fread($handle,6); //each caracter is 1 byte
		fclose($handle);
	}
	echo nl2br($content)."<br>";
	echo "<br>";
	$file2="filetest2.txt";
	if($handle=fopen($file2,"r")){
		$content=fread($handle,filesize($file2));
		fclose($handle);
	}
	echo nl2br($content)."<br>";

	echo "<br><br>";

	//file_get_contents(): shortcut
	$content=file_get_contents($file);
	echo nl2br($content);

	echo "<br><br>";

	//incremental reading
	if($handle=fopen($file2,"r")){
		$content2="";
		while(!feof($handle)){
			$content2 .= fgets($handle);
		}
		fclose($handle);
	}
	echo nl2br($content);

?>