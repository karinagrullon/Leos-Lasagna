<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/
	/* app state */
	include_once('../services/sessions.php');

  $header = file_get_contents('header.php');

  /* push header */
	echo $header;

	/* set current page */
	$GLOBALS['currentPage'] = LOGIN;
?>

  <!-- Custom styles for this template -->
  <link href="../css/signin.css" rel="stylesheet">

	<?php require_once('publicNav.php');  ?>
<body>
	<div class='jumbotron jumbotron-fluid text-white'>
    <div class="container">
      <form id="registerUser" action="../services/processAuth.php" method="POST">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" class="form-control" name="userLogin" placeholder="Email address" required autofocus>
        <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" name="userPassword" placeholder="Password" required>
        <br/>
				<div class="row">
									<div class="col-sm-12"><button class="btn btn-outline-light btn-lg btn-block" type="submit">Log in</button></div>
				</div>
      </form>
			<br/>
			<div class="row">
					<div class="col-sm-12">
						<a href="registerUser.php" style="color: #fff!important; text-align: left;">
							Register
						</a>
			</div>
					</div><br/>
					<?php echo $_SESSION['err_msg']; ?>
    </div> <!-- /container -->
 </div><!-- /jumbotron -->
  </body>
</html>
