<?php
	#substr *String
	/*$output = substr('Excel', 0,3);
	echo $output;*/

	#strlen() *String Length
		/*$mes = strlen('Excel Technical');
		echo $mes;*/

	#strpos() *String possition
		/*$mes = strpos('Excel Technical','e');
		echo $mes;*/

	#strrpos() *String last possition
		/*$mes = strrpos('Excel Technical','e');
		echo $mes;*/

	#uwords() *Replace all 1st string of the word
		/*$mes = ucwords('excel Technical');
		echo $mes;*/

	#str_replace() *Replace the String
		/*$mes ='Hello babe';
		$out = str_replace(search, replace, subject);
		echo $out;*/

	#is_string() *Find out if the data type is String and Count it
		/*$val = '22';
		$out = is_string($val);
		echo $out;*/

	#Test data types
		$values = array(true,false,null,'abc',123,'123',0,' ',1.0,' : ');
		/*$res=;
		for($j=0; $j < 9; $j++){
			$ouput = is_string ($val[$j]);
		if ($output == 1){
			$a++;
			$res = $val[($j)];
			echo $res . 'is a string <br>';
		}
	}*/
	foreach($values as $value){
		if(is_string($value)){
			echo $value.' is a string <br>';
		}
	}
?>