<html>
<head>
	<title>This is factorial</title>
</head>
<body>
	<form method="post">
		Enter Number:<input type="number" name="fact"/>
		<input type="submit" name="Submit"/>
	</form>
</body>
</html>
<?php
if($_POST){
	$fact=$_POST['fact'];
	$num=1;
	for ($i=1; $i<=$fact; $i++) { 
		$num=$num*$i;	# code...
	}
	echo "factorial of $fact is= $num";
}
?>


