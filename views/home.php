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

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff!important;">
	<a class="navbar-brand" href="home.php">
		<div class="green_icon"></div>
		<img alt="logo" src="../images/Logo.png" width="100" height="100"/>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/">Todays Deliveries</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
					Tools
				</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<?php
	if($_SESSION['user_type'] == "ADMIN"){
		$sqlMenu = "SELECT `access_control_list`.`menu_item` FROM `access_control_list`
								WHERE `access_control_list`.`access_level`='".$_SESSION['userAccessLevel']."'
								GROUP BY `access_control_list`.`menu_item` ASC;";

		$resultMenu = mysqli_query($GLOBALS['link'], $sqlMenu);

		while($rowMenu = $resultMenu->fetch_array(MYSQLI_ASSOC)){
					echo "<a class='dropdown-item' href='#'>".$rowMenu['menu_item']."</a>";
		}
		echo "<a class='dropdown-item' href='logout.php?logout=1'>Log Out</a>
		        </div>
		      </li>
		    </ul>
		    <form class='form-inline my-2 my-lg-0'>
		      <input class='form-control mr-sm-2' type='search' placeholder='Track Deliveries' aria-label='Search'>
		      <button class='btn btn-outline-danger my-2 my-sm-0' type='submit'>Search</button>
		    </form>
		    <!-- PFOILE -->
		    <ul class='nav' style='margin: 3%!important;'>
		          <li class='dropdown dark user-menu'>
		                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
		                  <span class='user-name'></span>
		                  <div class='green_icon'>
		                  		<div id='user'>".$_SESSION['name']."</div>
											</div>
		                </a>
		                <ul class='dropdown-menu'>
		                  <li>
		                    <a href='user_profile.html'>
		                      <i class='fa fa-user'></i>
		                      Profile
		                    </a>
		                  </li>
		                  <li>
		                    <a href='user_profile.html'>
		                      <i class='fa fa-cog'></i>
		                      Settings
		                    </a>
		                  </li>
		                  <li class='divider'></li>
		                  <li>
		                    <a href='sign_in.html'>
		                      <i class='fa fa-sign-out'></i>
		                      Sign out
		                    </a>
		                  </li>
		                </ul>
		          </li>
		      </ul>
		  </div>
		</nav>
		<div class='home-all'>
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
		$navbar = file_get_contents('clientNavbar.php');
		$body = file_get_contents('clientHomeBody.php');

		/* begin navigation structure */
		echo $navbar;
		/* end navigation structure */

		echo $body;
	}


/* begin footer */
	echo $footer;
/* end footer */

?>
