<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include("Connect_Database.php")
?>
<?php


$userInsert = "insert into users values('" .
			   $_POST["name"] .
			   "', '" .
			   $_POST["email"] .
			"')";

$result = mysqli_query($connect, $userInsert);
?>
</body>
</html>