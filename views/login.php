<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

	require('services/sessions.php');

  $header = file_get_contents('views/header.php');

  /* push header */
	echo $header;
?>

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">

<body>
    <div class="container">
    <center><img class="login-logo" alt="logo" src="images/Logo.png" width="200" height="200"/></center>
      <form id="registerUser" action="services/processAuth.php" method="POST">
        <br/>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" class="form-control" name="userLogin" placeholder="Email address" required autofocus>
        <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" name="userPassword" placeholder="Password" required>
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         <br/>
				 <a href="views/registerUser.php">Register</a>
      </form>
					<?php echo $_SESSION['err_msg']; ?>
    </div> <!-- /container -->

  </body>
</html>
