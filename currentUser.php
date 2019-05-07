//add this to htdocs. this keeps tracks of the current user
<?php
	session_start();
	$name_email = 'name=' . $_SESSION['name'] .
				  '&email=' . $_SESSION['email'];
	#print $name_email;
?>