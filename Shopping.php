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
</form>

<form action="shopping.php" method="post">
<select name="subject">
<option value="Math">Math</option>
<option value="English">English</option>
<option value="Spanish">Spanish</option>
<option value="Computer Science">Computer Science</option>
<option value="History">History</option>
<option value="Physics">Physics</option>
<option value="Science">Science</option>
<option value="Political Science">Political Science</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>

<form action="shopping.php" method="post">
<select name="price">
<option value="50">0 - 99</option>
<option value="150">100 - 199</option>
<option value="250">200 - 299</option>
<option value="350">300 - 399</option>
<option value="450">400 - 499</option>
</select>
<input type="submit" name="submit" value="Get price range" />
</form>

<form action="shopping.php" method="post">
<input type="submit" name="books" value="Show All"/>
</form>

<form action="shoppingCartArray.php" method="post">
<input type="submit" name="shoppingCart" value="View Shopping cart"/>
</form>

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
		<th>
			Subject
		</th>
		<th>
			Price
		</th>
		<th>
		ADD TO CART
		</th>
	</tr>
	<?php

		if (isset($_POST['subject'])) {
			$selected_sub = $_POST['subject'];
		} 
		if (isset($_POST['price'])) {
			$selected_price = (float)$_POST['price'];
			
		}

		while($row = mysqli_fetch_assoc($results)) 
		{
			//Logic for the search bar
			// if (!isset($_POST["search"])
			// 	|| strripos($row["title"], $_POST["search"]) !== false
			// 	|| $_POST["search"] == "")
			// {
			// 	if ($row['subject'] == $selected_val xor !(isset($selected_val))) {
			// 		if ($row['incart'] == 0) {
			if ($row['incart'] == 0) {
				if (!isset($_POST["search"])
			 	|| strripos($row["title"], $_POST["search"]) !== false
			 	|| $_POST["search"] == "") {
			 		if (!isset($selected_sub) || $row['subject'] == $selected_sub) {
						if (!isset($selected_price)
							|| ($row['price'] > $selected_price - 50
							&& $row['price'] < $selected_price + 49)) {
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
							print "<td>";
							print ($row["subject"]);
							print "</td>";
							print "<td>";
							print ($row["price"]);
							print "</td>";
							print "<td>";
							print "<a href='shoppingCartArray.php?";
							print "bookId=" . $row["bookId"] . "'>";
							print "ADD TO CART";
							print "</a>";
							print "</td>";
							print "</tr>";
						}
					}
				}
			}
		}
	?>
</table>



</body>
</html>