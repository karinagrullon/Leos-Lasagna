<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

	$digest = $_COOKIE['loginID'];
	$ip = $_SESSION['ipAddress'];
	$hash = $_SESSSION['session_hash'];

	if(isset( $_SESSION['current_page'])){
		$currPage = $_SESSION['current_page'];
	}

	if($_SESSION['login'] == "" && $currPage != "LOGIN"){
		//$_SESSION['msg'] = $msgStream->userMsg($msgStream->okLogOut, "SUCCESS");
		$location = "Location: ".$routeApp->app_url;

		unset($_SESSION);
		session_unset();
		session_destroy();

		header($location);
		exit();
	}else{
			if($_SESSION['login'] != "" && $currPage != "HOME"){
					$location = "Location: ".$routeApp->page_root."home.php";
					header($location);
					exit();
			}
	}

?>
