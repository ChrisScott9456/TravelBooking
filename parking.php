<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</head>

<body class="centered">
  <a href="logout.php">Start Over</a>
  <p>Logged in as: <?php echo $_SESSION['login_user']; ?></p>

<!-- This section is where a flight is chosen and added to the shopping cart -->
  <h1>Choose a Parking Option:</h1>

  <h3>Choose a Date:</h3>
  <input type="text" id="datepicker">
  <input type="button" onclick="setDate()" value="Set Date">

  <p id="datez"></p>

    <form action="shoppingcart.php" onclick="parkingAvailable()" method="post">
      <select name="parking" id="parking" disabled>
        <option></option>
        <option value="VIP">VIP Parking</option>
        <option value="Lot A">Lot A Parking</option>
        <option value="Lot B">Lot B Parking</option>
        <option value="Lot C">Lot C Parking</option>
      </select>
      <input id="cart" type="submit" value="Add to Cart" disabled><br>
      <input type="text" name="pricesubmit" id="pricesubmit" value="0" style="visibility: hidden">
    </form>

    <p id="available"></p>
    <p id="pricez">Price: $0</p>

  <script src="parking.js"></script>

</body>

</html>
