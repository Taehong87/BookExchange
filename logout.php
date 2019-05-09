//this file destroys the current session of the user which keeps track of who is the current user
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Exchange Login Page</title>
</head>
<body>
<?php
include("shoppingCart.php");
?>

<?php
	if(isset($_POST['logout'])){
		session_destroy();
		header("Location: login.html");
	}
?>
</body>
</html>