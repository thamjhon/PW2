<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	 $A = 123;
	 function Test(){
	 	$A = "Test";
	 	echo "Nilai A dalam fungsi=$A \n";
	 }
	 Test();
	 echo"Nilai A luar fungsi =$A \n";
	 ?>
</body>
</html>