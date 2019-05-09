<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User History Page</title>
</head>

<body>
<?php
	include("MainMenu.php")
?>
<?php
	include("Connect_Database.php")
?>
<?php
	$selectPurchased = "select * from purchased";
	$results = mysqli_query($connect, $selectPurchased);
?>
<table align="left" border=1 width=400>
	<tr>
		<th>
		Books Sold
		</th>
	</tr>
	<tr>
		<th>
			Title
		</th>
		<th>
			Name
		</th>
		<th>
			Sale Time
		</th>
		<th>
			Book Picture
		</th>
	</tr>
	<form action="history.php" method="post">
	<?php
		while($row = mysqli_fetch_assoc($results)) 
		{
			if($row["nameID"] == $_SESSION["id"]) {
	 			print "<tr>";
				print "<td>";
				print ($row["title"]);
				print "</td>";
				print "<td>";
				print ($row["name"]);
				print "</td>";
				print "<td>";
				print ($row["date"]);
				print "</td>";
				print "<td>";
				print "<img src='";
				print $row["picpath"] . "' height=50 width=50>";
				print "</td>";
				print "</tr>";
			}
		}
	?>
	</form>
</table>

<table align="right" border=1 width=400>
	<tr>
		<th>
			Books Purchased
		</th>
	</tr>
	<tr>
		<th>
			Title
		</th>
		<th>
			Name
		</th>
		<th>
			Purchase Time
		</th>
		<th>
			Book Picture
		</th>
	</tr>
	<?php
		//line below resets pointer to top of table again
		mysqli_data_seek($results, 0);
		while($row = mysqli_fetch_assoc($results)) 
		{
			if($row["purchaserID"] == $_SESSION["id"]) {
			print "<tr>";
			print "<td>";
			print ($row["title"]);
			print "</td>";
			print "<td>";
			print ($row["name"]);
			print "</td>";
			print "<td>";
			print ($row["date"]);
			print "</td>";
			print "<td>";
			print "<img src='";
			print $row["picpath"] . "' height=50 width=50>";
			print "</td>";
			print "</tr>";
			}
		}
	?>
</table>
</form>
</body>
</html>