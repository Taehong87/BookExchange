
//I ADDED A FORM TO THIS FILE. the form is to logout the user. Add this modification to mainMenu.php
<link href="MainMenu.css" type="text/css" rel="stylesheet" />

<?php
	session_start();
	$name_email_id = 'name=' . $_SESSION['name'] .
				  '&email=' . $_SESSION['email'] .
				  '&id=' . $_SESSION['id'];
	//print $name_email_id;
	
?>

<form action="logout.php" method="post">
<input type="submit" name="logout" value="logout">
</form>

<ul class="ul_css">
<li class="li_css">
	<a class="li_css_a" href="shopping.php?<?php print $name_email_id; ?>" /> shopping
	</a>
</li>
<li class="li_css">
	<a class="li_css_a" href="selling.php?<?php print $name_email_id; ?>" /> selling
	</a>
</li>
<li class="li_css">
	<a class="li_css_a" href="profile.php?<?php print $name_email_id; ?>" /> profile
	</a>
</li>
</ul>
