<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

	//If a flight option is chosen, add it to the cart
	if($_POST['flight'] != ''){
		$_SESSION['counter']++;
		$_SESSION['shoppingCart'][$_SESSION['counter']] =  $_POST['flight'];
	}

	//If a rental car option is chosen, add it to the cart
	if($_POST['car'] != ''){
		$_SESSION['counter']++;
		$_SESSION['shoppingCart'][$_SESSION['counter']] =  $_POST['car'];
	}

}

header("location: menu.php");
?>
