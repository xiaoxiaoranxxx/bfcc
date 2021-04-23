<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	if (isset($_POST['button'])) {
		$ch = trim($_POST['ch']);
		$math = trim($_POST['math']);
		if ($ch == '' || !is_numeric($ch) || $ch < 0 || $ch > 100) {
			echo 'the chinese must 0-100';
		} elseif ($math == '' || !is_numeric($math) || !($math >= 0 && $math <= 100)) {
			echo 'the math must 0-100';
		} else {
			$avg = ($ch + $math) / 2;
			echo "the avg is:{$avg}<br>";
			if ($avg >= 90) echo '6666';
			elseif ($avg >= 80) echo '8888';
			elseif ($avg >= 70) echo '7777';
			elseif ($avg >= 60) echo '0000';
			else echo '5555';
		}
		echo '<hr>'; 
	}
	?>
	<form method="post" action="">
		chinese:<input type="text" name="ch"><br>
		&nsmath:<input type="text" name="math"><br>
		<input type="submit" name="button" value="judge">
	</form>
</body>

</html>