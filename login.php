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


	//print $searchUser;
	$results = mysqli_query($connect, $searchUser);
	$data = mysqli_fetch_assoc($results);
	//print $data["id"];
     

	if (mysqli_num_rows($results) == 0) 
	{
		header("Location: login.html");
		exit;
	}

	if (mysqli_num_rows($results) > 0) 
	{
		session_start();
		$_SESSION['name'] = $data["name"];
		$_SESSION['email'] = $data["email"];
		$_SESSION['id'] = $data["id"];
		$_SESSION['cin'] = $data["cin"];
		$_SESSION['nickname'] = $data['nickname'];
		$_SESSION['profpic'] = $data['profpic'];
		print $_SESSION["id"];
		header("Location: Main.php");
		exit;
	}

?>
</body>
</html>