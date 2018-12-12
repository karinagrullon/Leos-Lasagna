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

	/* get state */
	include_once('../services/sessions.php');

	$header = file_get_contents('header.php');
	$footer = file_get_contents('footer.php');

	/* begin header */
	echo $header;
	/* end header */

	/* set current page */
	$GLOBALS['currentPage'] = THANKYOU;

	/* add menu if user is an admin only */
	if($_SESSION['user_type'] && isset($_SESSION['id'])){
		include_once('menu.php');
	}else{
		include_once('publicNav.php');
	}

	echo "<div class='home-all'>
		<div class='jumbotron jumbotron-fluid text-center'>
			<div class='container'>
				<h1 class='display-4'>".$_SESSION['err_msg']."</h1>
			</div>
		</div>";



/* begin footer */
	echo $footer;
/* end footer */

?>
