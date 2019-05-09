
<?php
	session_start();
	$name_email_id = 'name=' . $_SESSION['name'] .
				  '&email=' . $_SESSION['email'] .
				  '&id=' . $_SESSION['id'];
	#print $name_email;
?>