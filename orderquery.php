<?php
  $conn = new mysqli('localhost', 'root', '', 'finalproject')
  or die ('Cannot connect to db');
  $user = $_SESSION['login_user'];

  $result = $conn->query("select * from orders where username='$user'");

  while ($row = $result->fetch_assoc()) {

    unset($id, $name);

    echo '<tr>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['flight'] . '</td>';
    echo '<td>' . $row['flightprice'] . '</td>';
    echo '<td>' . $row['seating'] . '</td>';
    echo '<td>' . $row['seatprice'] . '</td>';
    echo '<td>' . $row['rentalcar'] . '</td>';
    echo '<td>' . $row['carprice'] . '</td>';
    echo '<td>' . $row['parking'] . '</td>';
    echo '<td>' . $row['parkingprice'] . '</td>';
    echo '</tr>';
  }
?>
