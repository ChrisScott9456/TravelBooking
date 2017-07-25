<?php
  include('session.php');
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">
  <style>
    td {
      padding: 10px 20px;
    }
  </style>

</head>

<body class="centered">
  <a href="menu.php"><button class="main">Main</button></a>
  <br>

  <a href="login.php"><button id="login" type="button">Login</button></a>
  <a href="profile.php"><button id="profile" type="button">View Profile</button></a>
  <a href="logout.php"><button id="logout" type="button">Logout</button></a>

  <br>
  <h2><?php echo $_SESSION['login_user'] ?>'s Orders:</h2>
  <table class="centered">
    <tr>
      <th>Username</th>
      <th>Flight</th>
      <th>Flight Price</th>
      <th>Seating</th>
      <th>Seating Price</th>
      <th>Rental Car</th>
      <th>Car Price</th>
      <th>Parking</th>
      <th>Parking Price</th>
    </tr>
    <?php include('orderquery.php'); ?>
  </table>

</body>

</html>
