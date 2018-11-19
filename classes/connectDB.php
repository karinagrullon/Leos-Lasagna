<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

  class connectDB{

	public $m_host;
	public $m_database;
	public $m_user;
	public $m_password;
	public $connection;
	public $db;


  public function openConnect( $m_host, $m_database, $m_user, $m_password ){
      $connection = mysqli_connect($m_host, $m_user, $m_password, $m_database);
      if( $connection ){
        	$resp = TRUE;
      }else{
				 	$resp = FALSE;
			}
    return $resp;
	}

	public function closeConnect(){
				if(mysqli_close($connection)){
				      return TRUE;
        }
	}
}
?>
