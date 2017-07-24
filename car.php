<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">

</head>

<body class="centered">
  <a href="logout.php">Start Over</a>
  <p>Logged in as: <?php echo $_SESSION['login_user']; ?></p>

<!-- This section is where a rental car is chosen and added to the shopping cart -->
  <h1>Choose a Rental Car:</h1>

  <form action="shoppingcart.php" onclick="setCart()" method="post">
    <select id="car" name="car">
      <option></option>
      <!--Populate the dropdown menus with car inventory options from MySQL Database-->
      <?php include('carquery.php'); ?>

    <input id="cart" type="submit" value="Add to Cart" disabled>
  </form>

  <p id="carPrice">Price: $0</p>

  <script src="car.js"></script>

</body>

</html>
