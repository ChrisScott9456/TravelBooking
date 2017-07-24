<?php
  include("config.php");
  session_start();

  if($_SESSION['login_user'] == ""){
    $_SESSION['end'] = false;
    header("location: login.php");
  }else{
    $username = $_SESSION['login_user'];
    $flight = $_SESSION['shoppingCart'][1][0];
    $flightprice = $_SESSION['shoppingCart'][1][1];
    $seating = $_SESSION['shoppingCart'][2][0];
    $seatprice = $_SESSION['shoppingCart'][2][1];
    $rentalcar = $_SESSION['shoppingCart'][3][0];
    $carprice = $_SESSION['shoppingCart'][3][1];
    $parking = $_SESSION['shoppingCart'][4][0];
    $parkingprice = $_SESSION['shoppingCart'][4][1];

    //Create new order entry into database from shoppingcart.php
    $query = "INSERT INTO `orders` (username, flight, flightprice, seating, seatprice, rentalcar, carprice, parking, parkingprice) VALUES
      ('$username', '$flight', '$flightprice', '$seating', '$seatprice', '$rentalcar', '$carprice', '$parking', '$parkingprice')";

    $result = mysqli_query($db, $query);
    $_SESSION['end'] = true;
    header("location: profile.php");
  }
?>
