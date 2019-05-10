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

<div class="container">
<h1 class="my-4"></h1>
<div class="row">
	<div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title"></h4>
          <!-- form to make submit button work -->

<form class="form-inline" action="Shopping.php" method ="post">
    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="submit">Search</button>
</form>
<hr class="my-8">
<h4>Filter</h4>
<form action="shopping.php" method="post">
<select class="col-md-4 custom-select" name="subject">
<option value="Math">Math</option>
<option value="English">English</option>
<option value="Spanish">Spanish</option>
<option value="Computer Science">Computer Science</option>
<option value="History">History</option>
<option value="Physics">Physics</option>
<option value="Science">Science</option>
<option value="Political Science">Political Science</option>
</select>

<button class="col-md-6 btn btn-outline-primary" name="submit" type="submit">Filter By Subject</button> 
<!-- <input type="submit" name="submit" value="Get Selected Values" /> -->
</form>
<h4 class="my-4"></h4>
<form action="shopping.php" method="post">
<select class="col-md-5 custom-select" name="price">
<option value="50">0 - 99</option>
<option value="150">100 - 199</option>
<option value="250">200 - 299</option>
<option value="350">300 - 399</option>
<option value="450">400 - 499</option>
</select>
<button class="col-md-5 btn btn-outline-primary" name="submit" type="submit">Filter By Price</button>
<!-- <input type="submit" name="submit" value="Get price range" />
 -->
</form>
<hr class="my-8">

<div class="row">
	<div class="col-md-6">
<form action="shopping.php" method="post">
<button class="btn btn-outline-primary my-2 my-sm-0" name="books" type="submit">Show All</button>
<!-- <input type="submit" name="books" value="Show All"/>
 -->
</form>
</div>
<div class="col-md-6">
<form action="shoppingCartArray.php" method="post">
<!-- <input type="submit" name="shoppingCart" value="View Shopping Cart"/>
 -->
 <button class="btn btn-outline-primary my-2 my-sm-0" name="shoppingCart" type="submit">Shopping Cart</button>
</form>
</div>
</div>
          </div>
      </div>
  </div>
 <div class="col-lg-8">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title"></h4>
          <table class="table table-bordered" align="center" border=2 width=100%>
          	<thead class="thead-dark">
         	<tr>
         		<th scope="col">Title</th>
         		<th scope="col">Name</th>
         		<th scope="col">Post Time</th>
         		<th scope="col">Book Picture</th>
         		<th scope="col">Subject</th>
         		<th scope="col">Price</th>
				<th scope="col">Add To Cart</th>
			</tr>
			</thead>
			<tbody>
	<?php

		if (isset($_POST['subject'])) {
			$selected_sub = $_POST['subject'];
		} 
		if (isset($_POST['price'])) {
			$selected_price = (float)$_POST['price'];
			
		}

		while($row = mysqli_fetch_assoc($results)) 
		{
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
</tbody>
</table>
          </div>
      </div>
  </div>
</div>
</div>

</body>
</html>