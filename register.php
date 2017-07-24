<?php
   include("config.php");
   session_start();
   $error = "";

   // If the values are posted, insert them into the database.
   if (isset($_POST['username']) && isset($_POST['password'])){
     $username = $_POST['username'];
     $password = $_POST['password'];

     $query = "INSERT INTO `customers` (username, password) VALUES ('$username', '$password')";
     $result = mysqli_query($db, $query);
     if($result){
       $error = "User Created Successfully.";
     }else{
       $error ="User Registration Failed";
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
