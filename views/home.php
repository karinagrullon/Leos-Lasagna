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
//$cookies = "{$base_dir}services{$ds}processCookie.php";

require($sessions);
//require($cookies);

$header = file_get_contents('header.php');
$footer = file_get_contents('footer.php');

	if($_SESSION['user_type'] == "ADMIN"){
		$navbar = file_get_contents("adminNavbar.php");
		$body = file_get_contents("adminHomeBody.php");
	}else{
		$navbar = file_get_contents("clientNavbar.php");
		$body = file_get_contents("clientHomeBody.php");
	}

	/* begin header */
	echo $header;
	/* end header */

	/* begin navigation structure */
	echo $navbar;
	/* end navigation structure */

	echo $body;


/* begin footer */
	echo $footer;
/* end footer */
