<!DOCTYPE html>
<html>
<head>

<title>VALIDATION</title>
</head>
<body>
<h1>FORM VALIDATTION</h1>
<form method="POST">
	NAME:<input type="text" name="name" id="name"><br><br>
	EMAIL:<input type="text" name="email" id="email"><br><br>
	MOBILE:<input type="text" name="phone" id="phone"><br><br>
	PASSWORD:<input type="password" name="pas" id="pas"><br><br>
	<input type="submit" name="submit" value="submit">
</form>	
<?php
if (isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['phone'];
	$password = $_POST['pas'];
	
	$isvalid = true;
	if (empty($name))
	{
		echo "Name is required.<br>";
		$isvalid = false;
	}
	if (empty($email))
	{
		echo "Email is required.<br>";
		$isvalid = false;
	}	
	elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	echo "Invalid email.<br>";
	$isvalid = false;
	}
	if (empty($password))
	{
		echo "password is required.<br>";
		$isvalid = false;
	}
	elseif(strlen($password) < 6)
	{
		echo "password must be at least 6 character long.<br>";
		$isvalid = false;
	}
	if ($isvalid)			
	{
		echo "<h3>Form submitted successfully!</h3>";
		echo "Name: $name <br>";
		echo "Email: $email <br>";
		echo "Mobile:$mobile <br>";
		echo "password:$password <br>";
	}										
}
?>

</body>
</html>	
	
	
	
	
