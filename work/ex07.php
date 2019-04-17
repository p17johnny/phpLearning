<?php
	$arr = $_REQUEST["input1"];
	echo $arr;
	$ar = explode(",",$arr);
	$arrlength = count($ar);
	echo $arrlength;
	$i = $arrlength-1;
	echo "<br>";
	
	while($i >= 0){
		echo $ar[$i];
		$i = $i - 1;
		
	}
?>
