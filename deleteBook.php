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
	header("Location: shopping.php");
?>
</body>
</html>
