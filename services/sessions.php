<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
    $streamFile = "{$base_dir}classes{$ds}msgStream.php";
    $validateFile = "{$base_dir}classes{$ds}validateInput.php";
    $configFile = "{$base_dir}classes{$ds}configApp.php";
    $dbFile = "{$base_dir}classes{$ds}connectDB.php";
    $functionFile = "{$base_dir}classes{$ds}globalFunctions.php";


    include_once( $streamFile );
    include_once( $validateFile );
    include_once( $configFile );
    include_once( $functionFile );
    include_once( $dbFile );

    $msgStream = new msgStream();
    $validateInput = new validateInput();
    $connectDB = new connectDB();
    $routeApp = new configApp();
    $globalFunctions = new globalFunctions();


    $digest = $_COOKIE['loginID'];
    $ip = $_SESSION['ipAddress'];
    $hash = $_SESSSION['session_hash'];
    $GLOBALS['warningMsg'] = "<div class='alert alert-danger' role='alert'>";
    $GLOBALS['successMsg'] = "<div class='alert alert-success' role='alert'>";
    $GLOBALS['closeMsg'] = "</div>";

  	ini_set( 'session.use_only_cookies', TRUE );
  	ini_set( 'session.use_trans_sid', FALSE );
  	ini_set( 'session.cookie_lifetime', 36000 );

    if (!isset($_SESSION['CREATED'])) {
    		session_start();
    		$_SESSION['CREATED'] = time();
	  }else if (time() - $_SESSION['CREATED'] > 36000) {
		    unset($_SESSION);
    	  session_unset();
    	  session_destroy();
	 }else{
		    $_SESSION['CREATED'] = time();
	 }

   if( defined( 'RESTRICTED' ) ){
     if( !isset( $_SESSION['id'] ) ){
       $location = "Location: ".$routeApp->app_url;
       header($location);
       exit();
     }
   }/*else {
      if ( isset( $_SESSION['id'] ) ) {
        $location = "Location: ".$routeApp->page_root."home.php";
        header($location);
        exit();
      }
    }*/

   $GLOBALS['link'] = mysqli_connect( $routeApp->dbhost, $routeApp->db_guard_login, $routeApp->db_guard_password, $routeApp->dbname );

?>
