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

<!-- This section is where a flight is chosen and added to the shopping cart -->
  <h1>Choose a Flight:</h1>

  <form action="shoppingcart.php" method="post">
    <select name="flight">
      <option></option>
      <!--Populate the dropdown menus with flight inventory options from MySQL Database-->
      <?php include('flight.php'); ?>

    <input type="submit" value="Add to Cart">
  </form>

<!-- This section is where a rental car is chosen and added to the shopping cart -->
  <h1>Choose a Rental Car:</h1>

  <form action="shoppingcart.php" method="post">
    <select name="car">
      <option></option>
      <!--Populate the dropdown menus with car inventory options from MySQL Database-->
      <?php include('car.php'); ?>

    <input type="submit" value="Add to Cart">
  </form>

  <br>
  <a href="viewcart.php">View Cart</a>

</body>

</html>
