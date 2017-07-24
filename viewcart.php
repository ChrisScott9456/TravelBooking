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
  <a href="menu.php">Start Over</a>

  <br>

  <h1>Shopping Cart</h1>
  <table>
    <tr>
      <th>Item Name</th>
      <th>Price</th>
    </tr>
  <?php
  $_SESSION['total'] = 0;

  //Print table of all the items in the cart
  foreach($_SESSION['shoppingCart'] as $value){
    echo '<tr>';
    echo '<td width="5%">' . $value[0] . '</td>';
    echo '<td width="2%" style="text-align: center;">$' . $value[1] . '</td>';
    echo '</tr>';
    $_SESSION['total'] += $value[1];
  }
  echo '<tr>';
  echo '<td> Total: </td>';
  echo '<td style="text-align: center;">$' . $_SESSION['total'] . '</td>';
  echo '</tr>';
  ?>

  </table>

  <br>
  <a href="checkout.php"><button type="button">Checkout</button></a>

</body>

</html>
