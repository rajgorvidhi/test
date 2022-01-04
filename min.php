<?php
$arr=array(5,3,1,4,6,2);
$max=$arr[0];
$min=$arr[0];
//echo $max."<br>";
for ($i=1; $i<count($arr); $i++) { 
	# code...
	if ($arr[$i]>$max) {
		# code...
		$max=$arr[$i];
	}
}
echo "Maximum is=".$max."<br>";
for ($i=1; $i<count($arr); $i++) { 
	# code...
	if ($arr[$i]<$min) {
		# code...
		$min=$arr[$i];
	}
}
echo "Minimum is=".$min;
?>