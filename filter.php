<?php
	/*$email = $_POST['data'];
	#remove illegal character
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	echo $email.'<br>';
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo 'Email is Valid';
	}
	else{
		echo 'Email is not Invalid';
	}
$var= 'asdsad123dfsfds34324';
	var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
#echo $var;*/
$var = 'dasdasdasd<script>alert(1)</script>';
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

?>
<!DOCTYPE html>
<html>
<head>
	<title> My webpage</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="data">
		<button type="submit">Puff Pass</button>
</body>
</html>