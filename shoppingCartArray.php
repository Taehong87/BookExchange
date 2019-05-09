//not done with this file. This file relates to shopping cart function
<?php
session_start();
if (empty($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}

$_SESSION['cart'][0] = 1;

?>