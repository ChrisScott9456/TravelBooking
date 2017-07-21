<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">

</head>

<body>
  <h1>Choose a Flight:</h1>

  <?php
  $conn = new mysqli('localhost', 'root', '', 'finalproject')
  or die ('Cannot connect to db');

      $result = $conn->query("select name from inventory where itype='flight'");

      echo "<select name='flight'>";

      while ($row = $result->fetch_assoc()) {

                    unset($id, $name);
                    $name = $row['name'];
                    echo '<option>'.$name.'</option>';

  }

      echo "</select>";
  ?>

  <h1>Choose a Rental Car:</h1>

  <?php
  $conn = new mysqli('localhost', 'root', '', 'finalproject')
  or die ('Cannot connect to db');

      $result = $conn->query("select name from inventory where itype='car'");

      echo "<select id='car'>";

      while ($row = $result->fetch_assoc()) {

                    unset($id, $name);
                    $name = $row['name'];
                    echo '<option>'.$name.'</option>';

  }

      echo "</select>";
  ?>

</body>

</html>
