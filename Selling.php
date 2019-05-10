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

<div class="container">
<h1 class="my-4"></h1>
<div class="row">
	<div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title"></h4>
          	<form action="SellingInsert.php" enctype="multipart/form-data" method="post">
			
			    <div class="form-group row">
    			<label class="col-sm-4 col-form-label col-form-label-sm">User Name</label>
    		  <div class="col-sm-8">
      		<input type="text" readonly class="form-control" name="name" value="<?php
										print $_GET['name'];
										?>"/>
    		  </div>
  			  </div>

  			<div class="form-group row">
    			<label class="col-sm-4 col-form-label col-form-label-sm">Email</label>
    		<div class="col-sm-8">
      		<input type="text" readonly class="form-control" name="email" value="<?php
										print $_GET['email'];
										?>"/>
    		</div>
  			</div>

  			<div class="form-group row">
    			<label class="col-sm-4 col-form-label col-form-label-sm">Book Title</label>
    		<div class="col-sm-8">
      		<input type="text"  class="form-control" name="title"/>
    		</div>
  			</div>

  			<div class="form-group row">
    			<label class="col-sm-4 col-form-label col-form-label-sm">Price</label>
    		<div class="col-sm-8">
      		<input type="text"  class="form-control" name="price"/>
    		</div>
    		</div>

    		<div class="form-group row">
    			<label class="col-sm-4 col-form-label col-form-label-sm">Subject</label>
    		<div class="col-sm-8">
      		<input type="text"  class="form-control" name="subject"/>
    		</div>
    		</div>

    		<div class="form-group row">
    			<label class="col-sm-4 col-form-label col-form-label-sm">Description</label>
    		<div class="col-sm-8">
      		<input type="text"  class="form-control" name="description"/>
    		</div>
    		</div>

    		<div class="form-group row">
    			<label class="col-sm-4 col-form-label col-form-label-sm">Book Picture</label>
    		<div class="col-sm-8">
      		<input type="file" name="pic"/>
    		</div>
    		</div>

            <button class="btn btn-sm btn-primary btn-block" type="submit">Submit</button>
            </form>
            <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">
          </h4>
         	<table class="table" border=2 width=100%>
        	<thead class="thead-dark">
         	<tr>
         		<th scope="col">Title</th>
         		<th scope="col">Name</th>
         		<th scope="col">Post Time</th>
         		<th scope="col">Book Picture</th>
				<th width=80></th>
			</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_assoc($results)) 
			{
			if ($row["nameID"] == $_SESSION["id"]) {
				print "<tr>";
				print "<th scope='row'>";
				print ($row["title"]);
				print "</th>";
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
				print "<a href='deleteBook.php?";
				print "bookId=" . $row["bookId"] . "'>";
				print "DELETE";
				print "</a>";
				print "</td>";
				print "</tr>";
				}
			}?>
			</tbody>
		</table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- <form action="SellingInsert.php" enctype="multipart/form-data" method="post">
<table align="left">
	<tr>
		<td>
			User Name
		</td>
		<td>
		<input type="text" name="name" value="<?php print $_GET['name'];
										?>"/>
		</td>
	</tr>

	<tr>
		<td>
			Email
		</td>
		<td>
		<input type="text" name="email" value="<?php print $_GET['email'];
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
		<th width=100>
		</th>
	</tr>
	<?php
		// while($row = mysqli_fetch_assoc($results)) 
		// {
		// 	if ($row["nameID"] == $_SESSION["id"]) {
		// 		print "<tr>";
		// 		print "<td>";
		// 		print ($row["title"]);
		// 		print "</td>";
		// 		print "<td>";
		// 		print ($row["name"]);
		// 		print "</td>";
		// 		print "<td>";
		// 		print ($row["date"]);
		// 		print "</td>";
		// 		print "<td>";
		// 		print "<img src='";
		// 		print $row["picpath"] . "' height=50 width=50>";
		// 		print "</td>";
		// 		print "<td>";
		// 		print "<a href='deleteBook.php?";
		// 		print "bookId=" . $row["bookId"] . "'>";
		// 		print "DELETE";
		// 		print "</a>";
		// 		print "</td>";
		// 		print "</tr>";
			}
		}
	?>
</table>
</form> -->
</body>
</html>