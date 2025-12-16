<?php
    //mở file
	//đọc file
	//đóng file
	
	$file = fopen('data.txt', 'r');
	echo fread($file, filesize('data.txt'));
	fclose($file);
		
//cờ ktra đọc đến cuối file chưa feof
//fgets đọc 1 dòng
	
	$file = fopen('data.txt', 'r');
	while (!feof($file)){
		echo fgets($file);
	    echo '<br>';
	}
	fclose($file);

	
//fgetc đọc từng ký tự
	/*$file = fopen('data.txt', 'r');
	
	while (!feof($file)){
		echo fgetc($file);
	    echo '&nbsp';
	}
	fclose($file);*/
	
	
//fwrite để ghi văn bản vào file
	/*$file = fopen('data.txt', 'r');
	$txt = "This is the forth line";
	fwrite($file, $txt);
	
	$txt = "This is the fifth line";
	fwrite($file, $txt);
	while (!feof($file)){
		echo fgetc($file);
	    echo '&nbsp';
	}
	fclose($file);*/
	
// muốn nối thêm
/*$file = fopen('data.txt', 'r');
	$txt = "This is the forth line";
	fwrite($file, $txt);
	
	$txt = "This is the fifth line";
	fwrite($file, $txt);
	while (!feof($file)){
		echo fgetc($file);
	    echo '&nbsp';
	}
	fclose($file);*/
?>