<?php
  include('session.php');
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">

</head>

<body class="centered">
  <p><?php echo $_SESSION['login_user']; ?></p>

  <a href="login.php"><button id="login" type="button">Login</button></a>
  <a href="logout.php"><button id="logout" type="button">Logout</button></a>
  <br><br>
  <a href="flight.php"><button id="menu" type="button">Booking</button></a>

</body>

</html>
