<?php
	session_start();

	//Establish a connection to the database
	$conn = new mysqli('localhost', 'root', '', 'finalproject')
	or die ('Cannot connect to db');

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//If a flight option is chosen, add it to the cart
		if($_POST['flight'] != ''){
			$flight = $_POST['flight'];
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

			header("location: choosecar.php");
		}

		//If a rental car option is chosen, add it to the cart
		if($_POST['car'] != ''){
			$car = $_POST['car'];
			$_SESSION['counter']++; //Add another item to the cart
			$_SESSION['shoppingCart'][$_SESSION['counter']][0] = $car; //Set the new item's name

			$result = $conn->query("select price from inventory where name='$car'");
			$row = $result->fetch_assoc();

			$_SESSION['shoppingCart'][$_SESSION['counter']][1] = $row['price']; //Set the price of the new item (from DB)
			header("location: chooseparking.php");
		}

		//If a seating option is chosen, add it to the cart (prices vary)
		if($_POST['parking'] != ''){
			$parking = $_POST['parking'];
			$_SESSION['counter']++; //Add another item to the cart

			$_SESSION['shoppingCart'][$_SESSION['counter']][0] = $parking; //Set the new item's name
			$_SESSION['shoppingCart'][$_SESSION['counter']][1] = 0; //Set the default price of the new item to 0

			if($parking == "VIP"){ //If the parking is VIP, add 50 to the item's price
				$_SESSION['shoppingCart'][$_SESSION['counter']][1] = 50;
			}else if($parking == "Lot A"){ //If the parking is Lot A, add 35 to the item's price
				$_SESSION['shoppingCart'][$_SESSION['counter']][1] = 35;
			}else if($parking == "Lot B"){ //If the parking is Lot B, add 15 to the item's price
				$_SESSION['shoppingCart'][$_SESSION['counter']][1] = 15;
			}
			header("location: viewcart.php");
		}
	}
	?>
