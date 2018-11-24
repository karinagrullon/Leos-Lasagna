<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

class msgStream{
	public $msg;
	public $msgType;
	public $thisMsg;

	public $success = "<div class='alert alert-success' role='alert'>";
	public $danger = "<div class='alert alert-danger' role='alert'>";
	public $closeDiv = "</div>";

	public function userMsg($msg, $msgType){
			if($msgType == "GOOD"){
				$thisMsg = $success.$msg.$closeDiv;
			}else{
				$thisMsg = $danger.$msg.$closeDiv;
			}
		return $thisMsg;
	}

	/********* Eror Message Stream ***********/
	var $badLogin = "Invalid login or password";
	var $missingInfo = "Missing information please check all text boxes";
	var $unauthorized = "<font color='#FF0000'><b>Unauthorized use of file. You must properly login to gain access to this application</b></font>";
	var $no_db_connection = "<font color='#FF0000'><b>Unable to connect to database. Check login and password</b></font>";
	var $bad_string = "<font color='#FF0000'><b>Unexpected input. Login and Password must contain letters or numbers only</b></font>";
  var $empty_string = "<font color='#FF0000'><b>Login or Password cannot be left blank</b></font>";
	var $no_server_connection = "<font color='#FF0000'><b>Unable to connect to server</b></font>";
	var $no_user_access = "<font color='#FF0000'><b>Unable to establish user access</b></font>";


  /********* General Message Stream ***********/
	var $authorized = "Welcome to Leos Lasagna";
	var $add_Patient_ok = "Order successfully submitted";
	var $records_found = "Records found";
	var $okLogOut = "This is a success alert—check it out!";
}
?>
