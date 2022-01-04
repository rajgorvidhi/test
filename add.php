<html>
<head>
<title>This is addition page</title>
</head>
<body>
<form method="post">
Enter First Number:<input type="number" name="num1"/> </br>
Enter Second Number:<input type="number" name="num2"/> </br> 
<input type="submit" value="Add">
</form>
<?php
if($_POST){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$result=$num1+$num2;
	echo "Addition is= $result"."<br>";
}
?>
</body>
</html>