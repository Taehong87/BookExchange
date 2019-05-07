
//add this file to htdocs. Deletes a book in shopping page only if that book pertains to the current user.
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
$delete = "delete from books where 	title = '". $_GET['title'] ."' AND  email = '" . $_SESSION['email'] . "' AND name = '" . $_SESSION['name'] . "'";
$result = mysqli_query($connect, $delete);
	header("Location: shopping.php");
?>
</body>
</html>
