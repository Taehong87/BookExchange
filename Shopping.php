<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Page</title>
</head>

<body>
<?php
	include("MainMenu.php")
?>
<?php
	include("Connect_Database.php")
?>
<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
?>


<!-- form to make submit button work -->
<form action="Shopping.php" method ="post">



<!-- This table creates the search bar and the submit button for it -->
<table>
	<input type="text" name="search"/>
	<input type="submit" value="submit"/>
</table>

<table align="center" border=2 width=400>
	<tr>
		<th>
			Title
		</th>
		<th>
			Name
		</th>
		<th>
			Post Time
		</th>
		<th>
			Book Picture
		</th>
	</tr>
	<?php
		while($row = mysqli_fetch_assoc($results)) 
		{
			//Logic for the search bar
			if (!isset($_POST["search"]) 
				|| strripos($row["title"], $_POST["search"]) !== false
				|| $_POST["search"] == "")
			{
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
</body>
</html>