<?php
$arr=array(200,15,69,122,50,201);
$f_max=0;
$s_max=0;
$f_min=0;
$s_min=0;
for ($i=0; $i <count($arr) ; $i++) { 
	# code...
	if ($arr[$i]>$f_max) {
		# code...
		$s_max=$f_max;
		$f_max=$arr[$i];
	}
	elseif ($arr[$i]>$s_max && $arr[$i]!=$f_max) {
		# code...
		$s_max=$arr[$i];
	}
}
echo "First Maximum is= $f_max </br>";
echo "Second Maximum is= $s_max";
for ($i=0; $i <count($arr) ; $i++) { 
	# code...
	if ($arr[$i]<$f_min) {
		# code...
		$s_min=$f_min;
		$f_min=$arr[$i];
		
	}
	elseif ($arr[$i]<$s_min && $arr[$i]!=$f_min) {
		# code...
		$s_min=$arr[$i];
	}
}
echo "First Minimum is= $f_min </br>";
echo "Second Minimum is= $s_min";
?>