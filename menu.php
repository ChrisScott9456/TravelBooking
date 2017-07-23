<?php
  session_start();
  session_destroy();
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">

  <script>
    function setCart() {
      if(document.getElementById("flight").value == ""){
        document.getElementById("cart").disabled = true;
      }else{
        document.getElementById("cart").disabled = false;
      }
    }
  </script>

</head>

<body>
  <a href="main.php">Main</a>

<!-- This section is where a flight is chosen and added to the shopping cart -->
  <h1>Choose a Flight:</h1>

  <form action="shoppingcart.php" onclick="setCart()" method="post">
    <select id="flight" name="flight">
      <option></option>
      <!--Populate the dropdown menus with flight inventory options from MySQL Database-->
      <?php include('flight.php'); ?>

    <input id="cart" type="submit" value="Add to Cart" disabled>
  </form>

</body>

</html>
