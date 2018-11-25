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
 $login = strtoupper($_POST['userLogin']);
 $password = $_POST['userPassword'];

if ( $login and $password ){
      $login = mysqli_real_escape_string($GLOBALS['link'], strtoupper(trim(substr( $login,0,127 ))));
      $password = mysqli_real_escape_string($GLOBALS['link'], trim(substr( $password,0,127 )));

			$sql = "SELECT * FROM `users`
                  INNER JOIN `user_type`
                  ON `users`.`user_type_id`=`user_type`.`user_type_id`
                  WHERE `users`.`user_login`='$login'";

			$result = mysqli_query($GLOBALS['link'], $sql);
      $rowCount = 0;
      $row = $result->fetch_array(MYSQLI_ASSOC);
      $hashed_password = $row["user_password"];
      $user_id = $row["user_id"];
      $user_name = $row["user_name"];
			$user_access_level = $row[ 'user_access_level' ];
			$user_client_id = $row["user_client_id"];

			$user_email = $login;
			$user_login = $row['user_login'];
			$date = date('l F\, dS Y');

			$validate_user = $globalFunctions->validatePassword($password, $hashed_password);

			$_SESSION['client_id'] = $user_client_id;
			$_SESSION['login'] = $login;
			$_SERVER['login'] = $login;
			$_COOKIE["loginID"] = $login;
			$_SESSION['ipAddress'] = $_SERVER['REMOTE_ADDR'];

		  if( intval($validate_user) == 1 ){
              $_SESSION['id'] = $user_id;
              $_SESSION['name'] = $user_name;
              $_SESSION['userAccessLevel'] = $user_access_level;

						  $_SESSION['session_hash'] = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
							$globalFunctions->setupCookie($user_email, $_SESSION['ipAddress'], $_SESSION['session_hash'], 'A', $routeApp->dbhost, $routeApp->dbname, $routeApp->db_guard_login, $routeApp->db_guard_password);
							setcookie('loginID', $_SESSION['session_hash'], time() + (86400 * 30), '/');


      				switch( intval($user_access_level) ){
								case 1:
									$_SESSION['user_type'] = "ADMIN";
									$location = "Location: ".$routeApp->page_root."home.php";
                  $_SESSION['current_page'] = "HOME";
									break;
								case 2:
		    					$_SESSION['user_type'] = "AIRLINE";
 									$location = "Location: ".$routeApp->page_root."home.php";
                  $_SESSION['current_page'] = "HOME";
									break;
                case 3:
  		    					$_SESSION['user_type'] = "HOTEL";
   									$location = "Location: ".$routeApp->page_root."home.php";
                    $_SESSION['current_page'] = "HOME";
  									break;
              }
				  }else{
					    $globalFunctions->setupCookie($user_email, $_SESSION['ipAddress'], $_SESSION['session_hash'], 'I', $db->dbhost, $db->dbname, $db->db_guard_login, $db->db_guard_password);
						  $location = "Location: ".$routeApp->app_url;
              $_SESSION['current_page'] = "LOGIN";
              $_SESSION['err_msg'] = "<div class='alert alert-danger' role='alert'>".$msgStream->badLogin."</div>";
			    }
}else{
			$msg = $msgStream->empty_string;
			$location = "Location: ".$routeApp->app_url;
      $_SESSION['current_page'] = "LOGIN";
      $_SESSION['err_msg'] = "<div class='alert alert-danger' role='alert'>".$msgStream->missingInfo."</div>";
 }

header($location);
exit;
 ?>
