<?php
	session_start();

	//Establish a connection to the database
	$conn = new mysqli('localhost', 'root', '', 'finalproject')
	or die ('Cannot connect to db');

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//If a flight option is chosen, add it to the cart
		if($_POST['flight'] != ''){
			$flight = $_POST['flight'];
			$flight = preg_replace("/[^a-zA-Z_]+/", "", $flight);
			$_SESSION['counter']++; //Add another item to the cart

			$_SESSION['shoppingCart'][$_SESSION['counter']][0] =  $flight; //Set the new item's name
			$result = $conn->query("select price from inventory where name='$flight'");
			$row = $result->fetch_assoc();

			$_SESSION['shoppingCart'][$_SESSION['counter']][1] = $row['price']; //Set the price of the new item (from DB)
			header("location: seating.php");
		}

		//If a seating option is chosen, add it to the cart (prices vary)
		if($_POST['seating'] != ''){
			$seating = $_POST['seating'];
			$price = $_POST['pricesubmit'];
			$_SESSION['counter']++; //Add another item to the cart

			$_SESSION['shoppingCart'][$_SESSION['counter']][0] = $seating; //Set the new item's name
			$_SESSION['shoppingCart'][$_SESSION['counter']][1] = $price; //Set the new item's price

			header("location: car.php");
		}

		//If a rental car option is chosen, add it to the cart
		if($_POST['car'] != ''){
			$car = $_POST['car'];
			$_SESSION['counter']++; //Add another item to the cart
			$_SESSION['shoppingCart'][$_SESSION['counter']][0] = $car; //Set the new item's name

			$result = $conn->query("select price from inventory where name='$car'");
			$row = $result->fetch_assoc();

			$_SESSION['shoppingCart'][$_SESSION['counter']][1] = $row['price']; //Set the price of the new item (from DB)
			header("location: parking.php");
		}

		//If a seating option is chosen, add it to the cart (prices vary)
		if($_POST['parking'] != ''){
			$parking = $_POST['parking'];
			$price = $_POST['pricesubmit'];
			$_SESSION['counter']++; //Add another item to the cart

			$_SESSION['shoppingCart'][$_SESSION['counter']][0] = $parking; //Set the new item's name
			$_SESSION['shoppingCart'][$_SESSION['counter']][1] = $price; //Set the default price of the new item to 0

			header("location: viewcart.php");
		}
	}
	?>
