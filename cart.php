//not done with this file. The file relates to shopping cart
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
include ("shoppingCartArray.php");
?>



<?php
	date_default_timezone_set("America/Los_Angeles");
	$currentTime = date("Y-m-d H:i:s");
	#print ($currentTime);
?>

<?php
	print sizeof($_SESSION['cart']);
?>
</table>
</body>
</html>