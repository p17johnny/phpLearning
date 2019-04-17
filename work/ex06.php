<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex06</title>
</head>
<body>
	<?php
		$i1 = $_REQUEST["schoolnum"];
		$i2 = $_REQUEST["name"];
		$i3 = $_REQUEST["sex"];
		$i4 = $_REQUEST["phone"];
		$sport = $_REQUEST ["sport"];
		$i5 = implode (",", $sport);
		$i6 = $_REQUEST["mail"];

		
		echo '學號: '.$i1.'<br>';
		echo '姓名: '.$i2.'<br>';
		echo '性別: '.$i3.'<br>';
		echo '手機: '.$i4.'<br>';
		echo '擅長運動: '.$i5.'<br>';
		echo '郵件: '.$i6.'<br>';
		
		?>
	<input type ="button" onclick="history.back()" value="Back"></input>
</body>
</html>