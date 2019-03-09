<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrator Page</title>
</head>

<body>
<?php
	include("Connect_Database.php")
?>
<?php
	$searchUser = "select * from users where " .
		"name='" . $_POST["name"] . "' and " .
		"email='" . $_POST["email"] . "'";
	print $_POST["name"];
	print $searchUser;
	$results = mysqli_query($connect, $searchUser);

	if (mysqli_num_rows($results) == 0) 
	{
		header("Location: login.html");
		exit;
	}

	if (mysqli_num_rows($results) > 0) 
	{
		
		#header("Location: main.php");
		#exit;
	}

?>
</table>
</body>
</html>