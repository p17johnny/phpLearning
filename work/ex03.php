<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex03</title>
</head>
<body>
	<?php
		$date = $_REQUEST["date"];
		if ($date == 1){
			print "星期一";
		}
		else if ($date == 2){
			print "星期二";
		}
		else if ($date == 3){
			print "星期三";
		}
		else if ($date == 4){
			print "星期四";
		}
		else if ($date == 5){
			print "星期五";
		}
		else if ($date == 6){
			print "星期六";
		}
		else if ($date == 7){
			print "星期日";
		}
	?>
	<input type ="button" onclick="history.back()" value="Back"></input>
</body>
</html>