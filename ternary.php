<?php
	#ternary
	#$valriable = condition ? if true : if false
	#$loggedIn = true;
	/*
	if($loggedIn){
	echo 'You are Logged in';
	}
	else{
	echo 'You are not Logged in';
	}
	
	echo ($loggedIn) ? 'You are Logged In' : 
	'You are NOT Logged Ir';
	*/
	$grade = 65;

	if ($grade >= 100)
	echo 'Your Grade: Excelent <br />';
elseif ($grade >= 95)
	echo 'Your Grade: VeryGood <br />';
elseif ($grade >= 85)
	echo 'Your Grade: Satisfatory <br />';
elseif ($grade >= 75 )
	echo 'Your Grade: Good <br />';
elseif ($grade < 74)
	echo 'Your Grade: Failed <br />';

?>