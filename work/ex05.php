<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex05</title>
</head>
<body>
	<?php
		$max = $_REQUEST["input"];
		$total = 0;
		for($i=1;$i<=$max;$i++){
			$total+=$i;
		}
		echo $total;
		?>
	<input type ="button" onclick="history.back()" value="Back"></input>
</body>
</html>