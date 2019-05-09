// I added the drop down list for price and subject. Also added links for ADD TO CART, BUY NOW, DELETE.
<link href="shopping.css" type = "text/css" rel="stylesheet">

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Page</title>
</head>

<body>
<?php
	include("Connect_Database.php")
?>
<?php 
include("mainMenu.php");
?>
<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
?>
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
		<th>
		BUY NOW
		</th>
		<th>
		DELETE
		</th>
	</tr>
	
	//this prints books depending on if you select something from the drop down list whether if its based on the price or subject. Also prints the entire table if 

	//you select show all
<?php

	if (isset($_POST['subject'])) {
		$selected_val = $_POST['subject'];
	} 
	else if (isset($_POST['price'])) {
		$selected_val = (float)$_POST['price'];
		
	}
	else {
		$selected_val = NULL;
	}
	
	while($row = mysqli_fetch_assoc($results)) 
	{
		if ($row['subject'] == $selected_val xor !(isset($selected_val))) {
			
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
		print "<a href='cart.php?";
		print "bookId=" . $row["bookId"] . "'>";
		print "ADD TO CART";
		print "</a>";
		print "</td>";
		print "<td>";
		print "<a href='buyNow.php?";
		print "bookId=" . $row["bookId"] . "'>";
		print "BUY NOW";
		print "</a>";
		print "</td>";
		print "<td>";
		print "<a href='deleteBook.php?";
		print "title=" . $row["title"] . "'>";
		print "DELETE";
		print "</a>";
		print "</td>";
		print "</tr>";
		}
		else if ($selected_val > 0) {
		
			if ((($selected_val - 50) <= $row['price']) AND (($selected_val + 50) >= $row['price']) ) {
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
		print "<a href='cart.php?";
		print "bookId=" . $row["bookId"] . "'>";
		print "ADD TO CART";
		print "</a>";
		print "</td>";
		print "<td>";
		print "<a href='buyNow.php?";
		print "bookId=" . $row["bookId"] . "'>";
		print "BUY NOW";
		print "</a>";
		print "</td>";
		print "<td>";
		print "<a href='deleteBook.php?";
		print "title=" . $row["title"] . "'>";
		print "DELETE";
		print "</a>";
		print "</td>";
		print "</tr>";
			}
		}
	}
	
?>
</table>

//below is the code that displays the drop down list
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
<option value="50">0 - 100</option>
<option value="150">100 - 200</option>
<option value="250">200 - 300</option>
<option value="350">300 - 400</option>
<option value="450">400 - 500</option>

</select>
<input type="submit" name="submit" value="Get price range" />
</form>

<form action="shopping.php" method="post">
<input type="submit" name="books" value="Show All"/>
</form>
</body>
</html>