<?php
   include("config.php");
   session_start();
   $error = "";
   $_SESSION['login_user'] = "";

   //If there is a post for username or password, query the database
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      //Search the database for an entry matching the username and passowrd
      $sql = "SELECT username FROM customers WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;

        if($_SESSION['end']) {
          header("location: menu.php");
        }else {
          header("location: checkout.php");
        }
      }else {
          //If the user doesn't exist, send error message to register user
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

  <a href="menu.php"><button class="main">Main</button></a>

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
