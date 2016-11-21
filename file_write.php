<?php
$file = "filetest.txt";
if($handle = fopen($file,"w")){ //overwrite

	fwrite($handle, "abc\n"); 
	//it returns the number of bytes written or false
	$content="123\n456";
	fwrite($handle,$content);
	fclose($handle);
}else{
	echo "Could not open file for writing<br>";
}

//file_put_contents: shortcut for fopen/fwrite/fclose
//overwrites existing file by default
$file="filetest2.txt";
$content="111\n222\n333";
if($size=file_put_contents($file, $content)){
	echo "A file of {$size} bytes was created.";
}
?>