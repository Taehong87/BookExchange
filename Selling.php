<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Selling Page</title>
</head>

<body>
<?php
	include("mainMenu.php");
?>
<?php
	include("Connect_Database.php")
?>
<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
?>

<form action="SellingInsert.php" enctype="multipart/form-data" method="post">
<table align="left">
	<tr>
		<td>
			User Name
		</td>
		<td>
		<input type="text" name="name" value="<?php
										print $_GET['name'];
										?>"/>
		</td>
	</tr>

	<tr>
		<td>
			Email
		</td>
		<td>
		<input type="text" name="email" value="<?php
										print $_GET['email'];
										?>"/>
		</td>
	</tr>

	<tr>
		<td>
			Title
		</td>
		<td>
			<input type="text" name="title" />
		</td>
	</tr>

	<tr>
		<td>
			Price
		</td>
		<td>
			<input type="text" name="price" />
		</td>
	</tr>

	<tr>
		<td>
			Subject
		</td>
		<td>
			<input type="text" name="subject" />
		</td>
	</tr>

	<tr>
		<td>
			Description
		</td>
		<td>
			<input type="text" name="description" />
		</td>
	</tr>

	<tr>
		<td>
			Book Picture
		</td>
		<td>
			<input type="file" name="pic" />
		</td>
	</tr>

	<tr>
		<td>
			<input type="submit" value="submit" />
		</td>
	</tr>
</table>

<table align="right" border=2 width=400>
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
			if ($row["nameID"] == $_SESSION["id"]) {
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