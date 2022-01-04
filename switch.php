<html>
<head>
	<title>Switch Case</title>
</head>
<body>
	<div id="page-wrap">
		<h1> Simple Switch case Calculator</h1>
		<form method="post">
			<p>
				 <input type="decimal" name="n1"/> Enter First Number: </br>
			</p>
			<p>
				 <input type="decimal" name="n2"/> Enter Second Number: </br>
			</p>
			<input type="submit" name="operation" value="Add">
			<input type="submit" name="operation" value="Subtract">
			<input type="submit" name="operation" value="Multiply">
			<input type="submit" name="operation" value="Divide">
		</form>
	</div>
</body>
<?php
if($_POST){
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
	$operation=$_POST['operation'];
	switch($operation){
		case 'Add':
			# code...
			$result=$n1+$n2;
			echo "Addition is=$result";
			break;
		case 'Subtract':
			# code...
			$result=$n1-$n2;
			echo "Subtraction is=$result";
			break;
		case 'Multiply':
			# code...
			$result=$n1*$n2;
			echo "Multiplication is=$result";
			break;
		case 'Divide':
			# code...
			$result=$n1/$n2;
			echo "Divison is=$result";
			break;
		default:
			echo "Your choice is invalid";
			break;
	}
}
?>
</html>