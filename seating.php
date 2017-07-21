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

  <form action="shoppingcart.php" method="post">
    <select name="seating">
      <option></option>
      <option>First Class</option>
      <option>Business Class</option>
      <option>Premium Economy</option>
      <option>Economy</option>
    <input type="submit" value="Add to Cart">
  </form>

</body>

</html>
