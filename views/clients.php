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
$sessions = '{$base_dir}services{$ds}sessions.php';
//$cookies = '{$base_dir}services{$ds}processCookie.php';

include_once('../services/sessions.php');
//require($cookies);

$header = file_get_contents('header.php');
$footer = file_get_contents('footer.php');

/* begin header */
echo $header;
/* end header */

/* set current page */
$GLOBALS['currentPage'] = ORDERS;

/* add menu if user is an admin only */
if($_SESSION['user_type'] && isset($_SESSION['id'])){
	include_once('menu.php');
}else{
	include_once('publicNav.php');
}

	if($_SESSION['user_type'] == "ADMIN"){
		$pageTitle = '<h1 class="display-4">Clients</h1>';
		$sql_all_deliveries = "SELECT users.user_id, users.user_name, users.user_email, users.user_phone, user_type.user_description
														FROM users INNER JOIN user_type
													 ON users.user_type_id = user_type.user_type_id
													 GROUP BY users.user_id, users.user_name, users.user_email, users.user_phone, user_type.user_description
													 ORDER BY user_type.user_description ASC";

															//draw table header
															echo '<div class="home-all style="width: 90%;">
																				<div class="jumbotron jumbotron-fluid text-center">
																							<div class="container">
																								<center>'.$pageTitle.'</center>
																							</div>
																					<table width="80%" class="table table-striped table-bordered table-hover" style="opacity: 0.97!important;"" id="dataTables-example">
																						<thead>
																							<tr>
																								<th>Id</th>
																								<th>Name</th>
																								<th>Email</th>
																								<th>Phone</th>
																								<th>User Type</th>
																							</tr>
																						</thead>
																				<tbody>';
																				//process query
																				$result_deliveries = mysqli_query($GLOBALS['link'], $sql_all_deliveries);

																					 while ( $record = $result_deliveries->fetch_array(MYSQLI_ASSOC) )
																					 {
																								 $id = $record['user_id'];
																								 $name = $record['user_name'];
																								 $email = $record['user_email'];
																								 $phone = $record['user_phone'];
																								 $desc = $record['user_description'];

																								 //alternate row colors in table
																								 if($counter % 2 == 1){
																										 $rowSeq = 'odd';
																								 }else{
																										 $rowSeq = 'even';
																								 }

																								 echo '<tr class="'.$rowSeq.'odd gradeX">
																												<td>'.$id.'</td>
																												<td>'.$name.'</td>
																												<td>'.$email.'</td>
																												<td>'.$phone.'</td>
																												<td>'.$desc.'</td>
																											</tr>';
																					 }//end of while*/

																				echo '	</tbody>';
																				echo '</table>';
																				echo '</div>';
																				//end of table
	}

/* begin footer */
	echo $footer;
/* end footer */

?>
