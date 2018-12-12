<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

  //HEADERS
  include_once("sessions.php");

  //get user's input from POST method, sanitize data and standarize it
  if( isset($_POST['cheeseCheck']) && isset($_POST['lasagneQty']) > 0 ){
    $lasagne_type = $_POST['lasagneType'];
    $qty = $_POST['lasagneQty'];
    $unitPrice = $_POST['priceUnit'];
    $total = $qty * $unitPrice;
  }

  $location = "Location: ".$routeApp->page_root."thankyou.php";
  $_SESSION['err_msg'] = "Thank you for ordering at Leo's Lasagne!";

  header($location);
  exit;
?>
