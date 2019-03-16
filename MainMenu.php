<?php
	session_start();
	$name_email = 'name=' . $_SESSION['name'] .
				  '&email=' . $_SESSION['email'];
	#print $name_email;
?>

<ul>
<li>
	<a href="shopping.php?<?php print $name_email; ?>" /> shopping
	</a>
</li>
<li>
	<a href="selling.php?<?php print $name_email; ?>" /> selling
	</a>
</li>
<li>
	<a href="profile.php?<?php print $name_email; ?>" /> profile
	</a>
</li>
</ul>