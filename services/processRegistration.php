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
  if( isset($_POST['userEmail']) && isset($_POST['userName']) ){
    $email = strtoupper( mysqli_real_escape_string( $GLOBALS['link'], $_POST['userEmail']) );
    $name = strtoupper(mysqli_real_escape_string($GLOBALS['link'], $_POST['userName']));
    $address = strtoupper(mysqli_real_escape_string($GLOBALS['link'], $_POST['userAddress']));
    $city = strtoupper(mysqli_real_escape_string($GLOBALS['link'], $_POST['userCity']));
    $state = strtoupper(mysqli_real_escape_string($GLOBALS['link'], $_POST['userState']));
    $zip = strtoupper(mysqli_real_escape_string($GLOBALS['link'], $_POST['userZip']));
    $phone = strtoupper(mysqli_real_escape_string($GLOBALS['link'], $_POST['userPhone']));

    //if usertype and company are blank then it means it is a REGULAR client
    if( isset($_POST['userType']) ){
      $type = mysqli_real_escape_string( $GLOBALS['link'], $_POST['userType']);
    }else{
      $type = "REGULAR";
    }
    //if usertype and company are blank then it means it is a REGULAR client
    if( isset($_POST['customerCompany']) ){
      $company = mysqli_real_escape_string( $GLOBALS['link'], $_POST['customerCompany']);
    }else{
      $company = "Regular Clients Only";
    }
    //find out if the user is already registered in the system
    $sql = "SELECT * FROM `users` WHERE `user_login` = '$email'";
    $result = mysqli_query($GLOBALS['link'], $sql);

        if(mysqli_num_rows($result) > 0){
          //user already exists in the system
          $_SESSION['err_msg'] = $GLOBALS['warningMsg']."This user already exists in the system".$GLOBALS['closeMsg'];
        }else{
          //new user get data and set him/her up in the system
          if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
                //set the encryption algorightm and generate the password's salt
           			 $salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
    			}else{
    				     $salt = 'NO BLOWFISH';
    			}
          //generate a random password of length 12
          $password = $globalFunctions->generateRandomPassword(12);
          //encrypt the password
          $encrypted_password = $globalFunctions->encryptPassword($password, $salt);
          //get get customer id
          $customerid = $globalFunctions->getCustomerId($company);
          //get user type id
          $customertypeid = $globalFunctions->getCustomerTypeId($type);
          //register user
          $ok = $globalFunctions->registerUser($name, $email, $customertypeid, $customerid, $address, $city, $state, $zip, $phone, $encrypted_password, $salt);
          if($ok == "1"){
              $globalFunctions->emailUserPassword($name, $type, $company, $email, $password, $configApp->software_name, $configApp->app_url, $configApp->application_email);
              $_SESSION['err_msg'] = $GLOBALS['successMsg']."You have been successfully registered!".$GLOBALS['closeMsg'];
          }else{
              $_SESSION['err_msg'] = $GLOBALS['warningMsg']."Oops something went wrong. Unable to register you today. Try again later!".$GLOBALS['closeMsg'];
          }
        }
        $location = "Location: ".$routeApp->page_root."registerUser.php";
  }else{
    $location = "Location: ".$routeApp->app_url;
    $_SESSION['err_msg'] = $GLOBALS['warningMsg']."Unexpected error".$GLOBALS['closeMsg'];;
  }

  header($location);
  exit;
?>
