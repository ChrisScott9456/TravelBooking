<?php
  $conn = new mysqli('localhost', 'root', '', 'finalproject')
  or die ('Cannot connect to db');

  $result = $conn->query("select * from inventory where itype='flight'");

  while ($row = $result->fetch_assoc()) {

    unset($id, $name);
    $name = $row['name'];
    echo '<option>' . $name . ' - $' . $row['price'] . '</option>';

  }
    echo "</select>";
?>
