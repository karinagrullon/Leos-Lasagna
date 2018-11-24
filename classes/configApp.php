<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

class configApp {
	var $db_type = 'mysql';
	var $db_host = 'localhost';

	var $class_dir = 'classes';
	var $logs_dir  = 'logs';
	var $views_dir = 'views';
	var $img ='images';
	var $dbname = 'linuxqua_leoswebapp';

	//Admin Access Level 1
	var $db_admin_login = 'linuxqua_admin';
	var $db_admin_password = 'l{D4$M^f!]ZN';

	var $db_guard_login = 'linuxqua_guard';
	var $db_guard_password = '[YWBLbjUvW&M';

	var $software_name = 'Leos Lasagna Order Delivery Tracking System';
	var $software_version = '1.0';
	var $copyright_1 = 'MIT ';
	var $copyright_2 = 'License';
	var $parent_company = 'Team 4 @ Lehman College';
	var $app_desktop = "http://leos.linuxquaterly.com/";
	var $app_url_mobile = "http://leos.linuxquaterly.com/";
	var $app_url = "http://leos.linuxquaterly.com/";
	var $page_root = "http://leos.linuxquaterly.com/views/";
	var $administrator_email = "leoslasagna@linuxquaterly.com";
	var $application_email = 'do-not-reply@linuxquaterly.com';
	var $team_email = 'leoslasagna@linuxquaterly.com';
  var $services_root = "http://leos.linuxquaterly.com/services/";
	var $client_root = "http://leos.linuxquaterly.com/client_data/clients/";
	var $filters_directory = "filters";
	var $logos_directory = "images";
}
?>
