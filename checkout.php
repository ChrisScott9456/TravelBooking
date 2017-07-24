<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <style>
    html {
      background-image: url("img/bg.png");
      background-position: center;
      background-size: cover;
    }

    h1 {
      text-align: center;
    }

    table {
      margin: auto;
      border: 2px solid black;
      padding: 50px;
    }

    #button {
      text-align: center;
    }

    .centered {
      margin: auto;
      text-align: center;
    }

  </style>
</head>

<body class="centered">
  <a href="logout.php">Start Over</a>

  <br>

  <h1>Checkout</h1>

  <table>
    <tr>
      <td>Card Number</td>
      <td>Security Code</td>
      <td rowspan="4"><img id="cardtype" src="img/none.png"></img></td>
    </tr>
    <tr>
      <td><input id="cardNumber" onchange="verifyCard()" type="text"></td>
      <td><input type="number" min="100" max="999"></td>
    </tr>
    <tr>
      <td>Name on Card</td>
      <td>Expiration</td>
    </tr>
    <tr>
      <td><input type="text"></td>
      <td>
        <select>
          <?php
            for($i = 1; $i <= 12; $i++) {
              echo '<option>' . $i . '</option>';
            }
          ?>
        </select>
        /
        <select>
          <?php
            for($i = 17; $i <= 50; $i++) {
              echo '<option>' . $i . '</option>';
            }
          ?>
        </select>
      </td>
    </tr>
  </table>

  <br>
    <form action="submitorder.php" method="post">
      <input type="submit" value=" Checkout ">
    </form>

  <script src="creditcard.js"></script>

</body>
</html>
