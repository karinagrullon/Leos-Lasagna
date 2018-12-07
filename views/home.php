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
$GLOBALS['currentPage'] = HOME;

/* add menu if user is an admin only */
if($_SESSION['user_type'] && isset($_SESSION['id'])){
	include_once('menu.php');
}else{
	include_once('publicNav.php');
}

	if($_SESSION['user_type'] == "ADMIN"){
		echo "<div class='home-all'>
		  <div class='jumbotron jumbotron-fluid text-center'>
		    <div class='container'>
		      <h1 class='display-4'>Today's Deliveries</h1>
		      <table class='table'>
		        <thead class='thead-light'>
		          <tr>
		            <th scope='col'>#</th>
		            <th scope='col'>Client</th>
		            <th scope='col'>Address</th>
		            <th scope='col'>Delivery Time</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <th scope='row'>1</th>
		            <td>Jet Blue</td>
		            <td>JFK Airport</td>
		            <td>9:00 AM EST</td>
		          </tr>
		          <tr>
		            <th scope='row'>2</th>
		            <td>Hilton Hotel</td>
		            <td>234 W 42nd St, New York, NY 10036</td>
		            <td>5:00 AM EST</td>
		          </tr>
		        </tbody>
		      </table>
		    </div>
		  </div>
		</div>";
	}else{
		echo "<div class='home-all'>
      <div class='jumbotron jumbotron-fluid text-center'>
        <div class='container'>
          <h1 class='display-4'>Would You Like To Place An Order?</h1>
          <a href='placeOrder.php'  target='_self'><button type='button' class='btn btn-outline-light'>Place Order</button></a>
        </div>
      </div>

      <div class='jumbotron jumbotron-fluid text-center'>
        <div class='container'>
          <h1 class='display-4'>Try One Of Our Best Selling Lasagne</h1>";
        	include_once('bestSellerProducts.php');
      echo "<p class='lead'>(insert best selling lasagne)</p>
        </div>
      </div>
    </div>";
	}





/* begin footer */
	echo $footer;
/* end footer */

?>
