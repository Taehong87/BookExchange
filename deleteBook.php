<!doctype html>;
<html>
<head>
<meta charset="utf-8">
<title>Shopping Page</title>
</head>

<body>
<?php
include("Connect_Database.php");
?>

<?php
include("mainmenu.php");
?>

<?php
$delete = "delete from books where 	bookId = '". $_GET['bookId'] ."'";
$result = mysqli_query($connect, $delete);
	$URL = "Location: Selling.php?name=" .
			$_SESSION["name"] . 
			"&email=" .$_SESSION["email"];
	header($URL);
?>
</body>
</html>
