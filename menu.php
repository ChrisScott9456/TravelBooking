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
  <p>Logged in as: <?php echo $_SESSION['login_user']; ?></p>

  <a href="login.php"><button id="login" type="button">Login</button></a>
  <a href="profile.php"><button id="profile" type="button">View Profile</button></a>
  <a href="logout.php"><button id="logout" type="button">Logout</button></a>
  <br><br>
  <a href="flight.php"><button id="menu" type="button">Start Booking</button></a>

</body>

</html>
