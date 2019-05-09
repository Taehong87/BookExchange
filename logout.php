<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Exchange Login Page</title>
</head>
<body>

<?php
include("connect_Database.php");
?>



<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
?>

<?php
include("shoppingCartArray.php");
$_SESSION['cart'] = array();
?>


<?php
	if(isset($_POST['logout'])){
		$update = "UPDATE books SET incart = '0' where incart = '1' ";
		$updateNow = mysqli_query($connect, $update);
		
		session_destroy();
		header("Location: login.html");
	}
?>
</body>
</html>