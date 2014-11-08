<!DOCTYPE html>

<head>

</head>

<body>

<?php

echo "
	<form action=\"test1.php\" method=\"post\" > 
				Enter Account number :
		<input id=\"acno\" type=\"text\" name=\"acc_no\">
		</input>
	</form>
	";





echo "
	<form action=\"test1.php\" method=\"post\" > 
		<input id=\"button_1\" type=\"radio\" name=\"option\" value=\"option1\" > Option1 </input>
		<input id=\"button_2\" type=\"radio\" name=\"option\" value=\"option2\" > Option2 </input>
		<input type=\"submit\" value=\"Submit\">
	</form>
	";
	


?>

<form action="test1.php" method="post">
Password: <input type="password" name="pwd">
</form>

</body>

</html>
