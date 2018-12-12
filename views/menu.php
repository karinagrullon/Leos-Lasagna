<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

echo '<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff!important;">
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
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
				//Query access control list table
				$sqlMenu = "SELECT * FROM `access_control_list`
										WHERE `access_control_list`.`access_level`='".$_SESSION['userAccessLevel']."'
										GROUP BY `access_control_list`.`menu_item` ASC;";

				$resultMenu = mysqli_query($GLOBALS['link'], $sqlMenu);
				//Populate access control items
				while($rowMenu = $resultMenu->fetch_array(MYSQLI_ASSOC)){
							echo "<a class='dropdown-item' href='".$rowMenu['url']."' target='_self'>".$rowMenu['menu_item']."</a>";
				}
				echo '</div>
				      </li>
				    </ul>';
				if($_SESSION['user_type'] != "REGULAR"){
				    echo '<form class="form-inline my-2 my-lg-0">
							      <input class="form-control mr-sm-2" type="search" placeholder="Track Deliveries" aria-label="Search">
							      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
							    </form>';
				}
				echo '<!-- PFOILE -->
				    <ul class="nav" style="margin: 3%!important;">
				          <li class="dropdown dark user-menu">
				                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				                  <span class="user-name"></span>
				                  <div class="green_icon">
				                  		<div id="user">'.$_SESSION['name'].'</div>
													</div>
				                </a>
				                <ul class="dropdown-menu">
				                  <li>
				                    <a class="dropdown-item" href="profile.php">
				                      <i class="fa fa-user"></i>
				                      Profile
				                    </a>
				                  </li>
				                  <li class="divider"></li>
				                  <li>
				                    <a class="dropdown-item" href="logout.php?logout=1">
				                      <i class="fa fa-sign-out"></i>
				                      Sign out
				                    </a>
				                  </li>
				                </ul>
				          </li>
				      </ul>
				  </div>
				</nav>';

?>
