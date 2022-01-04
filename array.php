<?php
/*$array=array("1","2","3");
for ($i=0; $i <3 ; $i++) { 
	# code...
	echo "no=".$array[$i]."<br>"; 
}*/

/*$person=array("peter"=>"1","herry"=>"2","nick"=>"3","jonas"=>"4");
foreach ($person as $key => $value) {
	# code...
	echo $key."=>".$value."<br>";
}*/

$student=array(
	"ravi"=>array("c"=>1,"f"=>2,"e"=>3),
	"jay"=>array("c"=>4,"f"=>5,"e"=>6),		
	"nick"=>array("c"=>7,"f"=>8,"e"=>9)
);

echo "mark of c is=".$student["ravi"]["c"]."<br>";	 

foreach ($student as $key => $stu) {
	echo $stu["c"].",".$stu["f"].",".$stu["e"]."<br>";
	# code...
}

?>	