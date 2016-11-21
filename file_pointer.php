<?php
	$file = "filetest.txt";
	if($handle = fopen($file,"w")){ //overwrite

		fwrite($handle, "abc\n"); 
		//it returns the number of bytes written or false
		$content="123\n456";
		fwrite($handle,$content);

		//a and a+ modes will not let you move the pointer
		//to append and move the pointer we need to use r+
		$pos=ftell($handle);
		fseek($handle, $pos-6);
		fwrite($handle,"abcdef");

		rewind($handle);
		fwrite($handle, "xyz"); 

		fclose($handle);
	}else{
		echo "Could not open file for writing<br>";
	}
?>