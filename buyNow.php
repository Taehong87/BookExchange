// this file is in charge of buying a book instantly
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
include("mainMenu.php")
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

<h1 style="text-align: center"> Shopping Cart</h1>
<table align="center" border=2 width=400>
	<tr>
		<th>
		Name
		</th>
		<th>
			Title
		</th>
		<th>
			Book Picture
		</th>
		<th>
			Subject
		</th>
		<th>
			Price
		</th> 
		<th>
		Purchase
		</th>
	</tr>

<?php
	while ($row = mysqli_fetch_assoc($results)) {
		
		if ($row['name'] != $_SESSION['name'] AND $row['email'] != $_SESSION['email'] AND $row['bookId'] == $_GET['bookId']) {
			
		print "<tr>";
		print "<td>";
		print ($_SESSION['name']);
		print "</td>";
		print "<td>";
		print ($row["title"]);
		print "</td>";
		print "<td>";
		print "<img src='";
		print $row["picpath"] . "' height=50 width=50>";
		print "</td>";
		print "<td>";
		print ($row["subject"]);
		print "</td>";
		print "<td>";
		print ($row["price"]);
		print "</td>";
		print "<td>";
		print "<a href='currentPurchase.php?";
		print "bookId=" . $row["bookId"] . "'>";
		print "Purchase";
		print "</a>";
		print "</tr>";
		print "Total: Price: ";
		print ($row["price"]);
		}
	}
?>

</table>
</body>
</html>