<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">

  <script>
    function setCart() {
      if(document.getElementById("car").value == ""){
        document.getElementById("cart").disabled = true;
      }else{
        document.getElementById("cart").disabled = false;
      }
    }
  </script>

</head>

<body>
  <a href="main.php">Main</a>

<!-- This section is where a rental car is chosen and added to the shopping cart -->
  <h1>Choose a Rental Car:</h1>

  <form action="shoppingcart.php" onclick="setCart()" method="post">
    <select id="car" name="car">
      <option></option>
      <!--Populate the dropdown menus with car inventory options from MySQL Database-->
      <?php include('car.php'); ?>

    <input id="cart" type="submit" value="Add to Cart" disabled>
  </form>

</body>

</html>
