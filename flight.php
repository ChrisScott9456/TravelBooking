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
      if(document.getElementById("flight").value == ""){
        document.getElementById("cart").disabled = true;
      }else{
        document.getElementById("cart").disabled = false;
      }
    }
  </script>

</head>

<body class="centered">
  <a href="logout.php">Start Over</a>
  <p>Logged in as: <?php echo $_SESSION['login_user']; ?></p>

<!-- This section is where a flight is chosen and added to the shopping cart -->
  <h1>Choose a Flight:</h1>

    <form action="shoppingcart.php" onclick="setCart()" method="post">
      <select id="flight" name="flight">
        <option></option>
        <!--Populate the dropdown menus with flight inventory options from MySQL Database-->
        <?php include('flightquery.php'); ?>

      <input id="cart" type="submit" value="Add to Cart" disabled>
    </form>

</body>

</html>
