<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="utf-8" />
      
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include "nav.php" ?>
<div id="text" style="text-align:center;height:1000px;">
<br><br>
<h3> New customer Registration</h3>
<br>
<form action="" method="">
<table style="margin-left:250px;font-size:20px;width:100px">
<tr>
	<td>Referal 1:</td>
	<td><input type="text" name="name" style="height:30px"></td>
	<td><img src="wait.gif" style="width:50px;height:50px"></td>
</tr>
<tr>
	<td>Referal 2:</td>
	<td><input type="text" name="name" style="height:30px"></td>
	<td><img src="wait.gif" style="width:50px;height:50px"></td>
</tr>
<tr>
	<td>Name:</td>
	<td><input type="text" name="name" style="height:30px"></td>
</tr>
<tr>
	<td>DOB:</td>
	<td><input type="date" name="name" style="height:30px"></td>
</tr>

<tr>
	<td>PAN No:</td>
	<td><input type="text" name="name" style="height:30px"></td>
</tr>
<tr>
	<td>Address:</td>
	<td><textarea name="address" rows="10" cols="29"></textarea></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" name="name" style="height:30px;"></td>
</tr>
<tr>
	<td>Male</td>
	<td><input type="radio" name="sex" value="male"></td>
	
<tr>
	<td>Female</td>
	<td><input type="radio" name="sex" value="female"></td>
	
</tr>
<tr>
	<td>Documents</td>
	<td><input type="button" name="box" value="upload" style="height:40px;width:90px"></td>
	
	
</tr>
<tr>
	<td><input type="checkbox" name="box" ></td>
	<td>click checkbox to agree to terms and conditions</td>
	
</tr>
	

</table><br>
<input type="submit" value="Start Validation Process" style="height:50px;width:300px;margin-left:0px;font-size:22px;" >
</form>
</div>

<?php include "foot.php" ?>
 
</body>
</html>
