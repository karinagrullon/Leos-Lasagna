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

  //get user's input from $_POST to local variables and convert it to upper case
  if(isset($_POST['userEmail'])){
    $email = $_POST['userEmail'];
    $email = strtoupper($email);

    $sql = "SELECT * FROM `users` WHERE `user_login` = '$email'";
    $result = mysqli_query($GLOBALS['link'], $sql);

        if(mysqli_num_rows($result) > 0){
          $_SESSION['err_msg'] = "User already exists in the system ".$email;
        }else{
          $_SESSION['err_msg'] = "User has not been registed yet! ".$email;
        }
        $location = "Location: ".$routeApp->page_root."registerUser.php";
  }else{
    $location = "Location: ".$routeApp->app_url;
    $_SESSION['err_msg'] = "THIS IS WHAT PASSED ".$_POST['userEmail'];
  }

  header($location);
  exit;
?>
