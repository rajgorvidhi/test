<?php
$alpha="A";
for($i=1;$i<=5;$i++){
	for($j=5;$j>$i;$j--){
		echo "&nbsp;&nbsp;";
	}
	for($j=1;$j<=$i;$j++){
		echo "$alpha"."&nbsp;&nbsp;";
	}
	$alpha++;
	echo "</br>";
}
?>