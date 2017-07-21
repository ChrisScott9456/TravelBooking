<?php
	session_start();

	//Establish a connection to the database
	$conn = new mysqli('localhost', 'root', '', 'finalproject')
	or die ('Cannot connect to db');

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//If a flight option is chosen, add it to the cart
		if($_POST['flight'] != ''){
			$flight = $_POST['flight'];
			$_SESSION['counter']++;
			$_SESSION['shoppingCart'][$_SESSION['counter']][0] =  $flight;
			$result = $conn->query("select price from inventory where name='$flight'");
			$row = $result->fetch_assoc();
			$_SESSION['shoppingCart'][$_SESSION['counter']][1] = $row['price'];
		}

		//If a rental car option is chosen, add it to the cart
		if($_POST['car'] != ''){
			$car = $_POST['car'];
			$_SESSION['counter']++;
			$_SESSION['shoppingCart'][$_SESSION['counter']][0] =  $car;
			$result = $conn->query("select price from inventory where name='$car'");
			$row = $result->fetch_assoc();
			$_SESSION['shoppingCart'][$_SESSION['counter']][1] = $row['price'];
		}

	}

	header("location: menu.php");
?>
