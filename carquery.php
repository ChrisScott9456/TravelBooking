<?php
  $conn = new mysqli('localhost', 'root', '', 'finalproject')
  or die ('Cannot connect to db');

  $result = $conn->query("select name from inventory where itype='car'");

  while ($row = $result->fetch_assoc()) {

    unset($id, $name);
    $name = $row['name'];
    echo '<option value=' . $name . '>' . $name . '</option>';

  }
    echo "</select>";
?>
