<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex02</title>
</head>
<body>
	<?php
		$num1 = $_REQUEST["input1"];
		$num2 = $_REQUEST["input2"];

		if ($num1 > $num2){
			print $num1. "比較大";
			print $num1. ">" .$num2;
		}
		else if ($num1 == $num2){
			print "一樣大";
			print $num1. "=" .$num2;
		}
		else if ($num1 < $num2){
			print $num2. "比較大";
			print $num1. "<" .$num2;
		}
	?>
	<input type ="button" onclick="history.back()" value="Back"></input>
</body>
</html>