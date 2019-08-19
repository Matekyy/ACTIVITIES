<!DOCTYPE html>
<html>
	<body>
		<?php
			/*------------------
			function simpleFunction($name){
				echo 'Are you having fun ' .$name.'?';
			}
			simpleFunction('Jan Mau');
			----------------------*/
/*------------------------------------------------------
			function addNumbers($num1, $num2){
				echo $num1 + $num2;
			}
			addNumbers(2,3);
			--------------------------------*/
			function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

echo mb_strrev("1234");
			
		?>
	</body>
</html>