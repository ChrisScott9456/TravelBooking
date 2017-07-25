<?php
   include("config.php");
   session_start();
   $error = "";

   //If username and password are posted, query the database
   if (isset($_POST['username']) && isset($_POST['password'])){
     $username = $_POST['username'];
     $password = $_POST['password'];

     //Check if user already exists
     $sql = "SELECT username FROM customers WHERE username = '$username'";
     $result = mysqli_query($db,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

     $count = mysqli_num_rows($result);

     if($count == 1) {
        $error = "User already exists!";
     }else{

       //Create new user in database
       $query = "INSERT INTO `customers` (username, password) VALUES ('$username', '$password')";
       $result = mysqli_query($db, $query);

       if($result){
         $error = "User Created Successfully.";

         //Search the database for an entry matching the username and passowrd
         $sql = "SELECT username FROM customers WHERE username = '$username' and password = '$password'";
         $result = mysqli_query($db,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

         $count = mysqli_num_rows($result);

         if($count == 1) {
            $_SESSION['login_user'] = $username;

           if($_SESSION['end']) {
             header("location: menu.php");
           }else {
             header("location: checkout.php");
           }
         }
       }else{
         $error ="User Registration Failed";
       }
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

  <h1>Registration Page</h1>
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
