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
  <a href="menu.php">Menu</a>

  <br>

  <?php
  foreach($_SESSION['shoppingCart'] as $value){
    echo $value[0] . " /// " . $value[1];
    echo '<br>';
  }
  ?>

</body>

</html>
