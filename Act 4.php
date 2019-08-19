<?php

#ACTIVITY 4
/*$grade = 96;

	if ($grade > 100)
	echo 'Your Grade: Excelent <br />';
elseif ($grade >= 95)
	echo 'Your Grade: VeryGood <br />';
elseif ($grade >= 85)
	echo 'Your Grade: Satisfatory <br />';
elseif ($grade >= 75)
	echo 'Your Grade: Good <br />';
elseif ($grade < 74)
	echo 'Your Grade: Failed <br />';
*/

	/*$grade = ;
	echo 'ur grade is: '.($grade <= 74 ? 'Failed' :
						($grade <=84 ? 'Good' : 
						($grade <=90 ? 'Satisfatory' :
						($grade <=95 ? 'Verygood' :
						($grade <= 100 ? 'Excelent' : 'Not in Range')))));
	*/

	$login = false;
	$arr = [1,2,3,4,5];
	?>
<div>
		<?php if ($login = true):?>
		<h1> Welcome User</h1>
	<?php else : ?>
		<h1> Welcome Guest</h1>
	<?php endif; ?>
</div>

<div>
		<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>

<div>
	<?php for($i=0; $i < 10; $i++): ?>
	<li><?php echo $i ?></li>
<?php endfor; ?>
</div>
