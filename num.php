<?php
$n=1;
for($i=1;$i<=5;$i++){
	for($k=5;$k>$i;$k--){
		echo "&nbsp;&nbsp;";
	}
	for($j=1;$j<=$i;$j++){
	echo "$n"."&nbsp;";
	$n++;
	}
	echo "</br>";
}
?>