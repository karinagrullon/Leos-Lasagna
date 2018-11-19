<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

	define( 'RESTRICTED', true );
	$ds = DIRECTORY_SEPARATOR;
	$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
	$sessions = "{$base_dir}services{$ds}sessions.php";

	include_once($sessions);

	if(isset($_GET['logout'])){
		$_SESSION['logout'] = $_GET['logout'];
	}

	if($_SESSION['logout'] == 1){
		//$_SESSION['msg'] = $msgStream->userMsg($msgStream->okLogOut, "SUCCESS");

		$sql_cookie_update = "UPDATE user_access_log SET status = 'C' WHERE login = '".$_SESSION['login']."' AND status = 'A';";
		mysqli_query($GLOBALS['link'], $sql_cookie_update);

		unset($_SESSION);
		session_unset();
		session_destroy();

		$location = "Location: ".$routeApp->app_url;
		header($location);
		exit();
	}
?>
