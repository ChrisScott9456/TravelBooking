<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">

</head>

<body>
  <a href="main.php">Main</a>
  <a href="menu.php">Menu</a>

<!-- This section is where a flight is chosen and added to the shopping cart -->
  <h1>Choose a Seating Option:</h1>

  <form action="shoppingcart.php" onclick="seatsAvailable()" method="post">
    <select name="seating" id="seating">
      <option></option>
      <option value="First Class">First Class</option>
      <option value="Business Class">Business Class</option>
      <option value="Economy">Economy</option>
    <input id="cart" type="submit" value="Add to Cart">
    <p id="pricesubmit" value="9999"></p>
  </form>

  <p id="available"></p>

  <script src="seating.js"></script>

</body>

</html>
