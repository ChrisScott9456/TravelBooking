<?php
   include("config.php");
   session_start();
   $error = "";
   $_SESSION['login_user'] = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT username FROM customers WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;

         header("location: menu.php");
      }else {
         $error = 'Your Login Name or Password is invalid. Click here to register: <a href="register.php"><button>Register</button></a>';
      }
   }
?>

<!DOCTYPE html>
<html>

<head>

  <title>Final Project - Travel Booking</title>
  <link rel = "stylesheet" type="text/css" href="main.css">

</head>

<body class="centered">

  <a href="menu.php">Main</a>

  <h1>Login Page</h1>
  <form method = "POST">
    <table class="centered">
      <tr>
        <td>Username: </td>
        <td><input type="text" name="username" class="box"></td>
      </tr>
      <tr>
        <td>Password: </td>
        <td><input type="password" name="password" class="box"></td>
      </tr>
    </table>
    <br>
    <input type="submit" value=" Submit ">
  </form>

  <br>
  <div><?php echo $error; ?></div>

</body>

</html>
