<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	date_default_timezone_set("America/Los_Angeles");
	$currentTime = date("Y-m-d H:i:s");
	#print ($currentTime);
?>
<?php
	if ($_FILES["pic"])
	{
		$pathname = "images/" . $_FILES['pic']['name'];
		move_uploaded_file($_FILES['pic']['tmp_name'], $pathname);
	}
	#print ($pathname);
?>
<?php
	include("Connect_Database.php")
?>
<?php
	include("MainMenu.php")
?>
<?php
$bookInsert = "insert into books values(null, '" .
			   $_POST["name"] .
			   "', '" .
			   $_POST["email"] .
			   "', '" .
			   $_POST["title"] .
			   "', '" .
			   $_POST["description"] .
			   "', '" .
			   $currentTime .
			   "', '" .
			   $pathname .
			   "', '" . 
			   $_POST["subject"] . 
			   "', '" .
			   $_POST["price"] .
			   "', '" .
			   $_SESSION["id"] .
			   "')";

$result = mysqli_query($connect, $bookInsert);
	$URL = "Location: Selling.php?name=" .
			$_POST["name"] . 
			"&email=" .$_POST["email"];
	header($URL);
?>

</body>
</html>