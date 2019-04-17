<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex01</title>
</head>
<body>
    <?php
		$inputnum = $_REQUEST["input"];
		$temp=$inputnum*(9/5)+32;
		echo "攝氏溫度為" ,$inputnum, "華氏溫度為" ,$temp;
	?>
	<input type ="button" onclick="history.back()" value="Back"></input>
</body>
</html>