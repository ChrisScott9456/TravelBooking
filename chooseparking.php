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
  <h1>Choose a Parking Option:</h1>

  <form action="shoppingcart.php" method="post">
    <select name="parking">
      <option></option>
      <option>VIP Parking</option>
      <option>Lot A</option>
      <option>Lot B</option>
      <option>Lot C</option>
    <input type="submit" value="Add to Cart">
  </form>

</body>

</html>
