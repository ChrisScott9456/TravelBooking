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
  <a href="main.php">Main</a>
  <h1>Choose a Flight:</h1>

  <form action="shoppingcart.php" method="post">
  <select name="flight">
    <option></option>
  <?php
  $conn = new mysqli('localhost', 'root', '', 'finalproject')
  or die ('Cannot connect to db');

      $result = $conn->query("select name from inventory where itype='flight'");

      while ($row = $result->fetch_assoc()) {

                    unset($id, $name);
                    $name = $row['name'];
                    echo '<option>'.$name.'</option>';

  }

      echo "</select>";
  ?>
  <input type="submit" value="Add to Cart">

  <h1>Choose a Rental Car:</h1>

  <select name="car">
    <option></option>
  <?php
  $conn = new mysqli('localhost', 'root', '', 'finalproject')
  or die ('Cannot connect to db');

      $result = $conn->query("select name from inventory where itype='car'");

      while ($row = $result->fetch_assoc()) {

                    unset($id, $name);
                    $name = $row['name'];
                    echo '<option>'.$name.'</option>';

  }

      echo "</select>";
  ?>
  <input type="submit" value="Add to Cart">
  </form>

  <?php
    // Output whole array
    print_r($_SESSION['shoppingCart']);
  ?>

</body>

</html>
