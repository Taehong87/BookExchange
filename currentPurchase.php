
<!doctype html>;
<html>
<head>

//add this file to htdocs this allows a user to buy one book at a time
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
			if ($row['name'] != $_SESSION['name'] AND $row['email'] != $_SESSION['email'] AND $row['title'] == $_GET['title']) {
				$insertBook = "insert into purchasehistory values ('" . $_SESSION['name'] . "', '" . $_SESSION['email'] . "', '" . $_GET['title'] . "',
				'" . $currentTime . "', '" . $row['subject'] . "', '" . $row['price'] . "')";
				
				$insert = mysqli_query($connect, $insertBook);
				
				$deleteBook = "delete from books where name = '" . $row['name'] ."' AND  title = '" . $row['title'] ."'";
				$delete = mysqli_query($connect, $deleteBook);
				header("Location: mainMenu.php");
			}
		}	
?>
</body>
</html>
