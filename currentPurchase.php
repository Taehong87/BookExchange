//this file is in charge of deleting the book from the books database and add the purchased book to purchased database
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
include("currentUser.php");
?>

<?php
	date_default_timezone_set("America/Los_Angeles");
	$currentTime = date("Y-m-d H:i:s");
	#print ($currentTime);
?>

<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
?>

<?php

	while ($row = mysqli_fetch_assoc($results)) {
			if ($row['name'] != $_SESSION['name'] AND $row['email'] != $_SESSION['email'] AND $row['bookId'] == $_GET['bookId']) {
				$insertBook = "INSERT INTO purchased VALUES (null, '" . $row['name'] . "', '" . $row['title'] . "', '" . $row['description'] . "', '" . $currentTime . "',
				'" . $row['picpath'] . "', '" . $row['subject'] . "', '" . $row['price'] . "', '" . $row['nameID'] . "', '" . $_SESSION['name'] . "', '" . $_SESSION['id'] . "')";
				
				$insert = mysqli_query($connect, $insertBook);
				
				$deleteBook = "delete from books where name = '" . $row['name'] ."' AND  title = '" . $row['title'] ."'";
				$delete = mysqli_query($connect, $deleteBook);
				header("Location: mainMenu.php");
			}
		}	
?>
</body>
</html>
