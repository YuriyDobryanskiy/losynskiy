<?php
function ReadText($t){
	$lines = file($t);
	return $lines;
}

function TextExplode($a){
	$pieces = explode("|", $a);
	return $pieces;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Alexander Losinsky admin</title>
	<style>
	
	</style>
</head>
<body>
	<div class="wrapper">					
		<?php
		$file = "files/texts/seriesname.txt";
		$arr = ReadText($file);
		
		foreach ($arr as $aaa){
			$aaa = TextExplode($aaa);
			if (strlen($arr[1]) > 1){
			 	$new_array[$aaa[1]][0] = $aaa[0];
			 	$new_array[$aaa[1]][1] = $aaa[1];
			}      		
		}
		echo "<pre>";
		print_r($new_array);
		ksort($new_array);
		echo "<hr>";
		print_r($new_array);
		echo "</pre>";

		
		foreach ($new_array as $new_sort){
			if (strlen($new_sort[0])>1){
				echo $new_sort[0]." ".$new_sort[1]."<br>";
			}
		}
		//var_dump($new_array2);
		?> 
	</div>
</body>
</html>