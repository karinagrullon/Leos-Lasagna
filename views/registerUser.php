<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
$sessions = "{$base_dir}services{$ds}sessions.php";
$cookies = "{$base_dir}services{$ds}processCookie.php";

require($sessions);
//require($cookies);

$header = file_get_contents('header.php');
$footer = file_get_contents('footer.php');

	/* begin header */
	echo $header;
	/* end header */

	/* This only fires when user is being registered */
	if(isset($_GET['userName']) && isset($_GET['userEmail'])){
		$name = $_GET['userName'];
		$email = $_GET['userEmail'];

		//1. check if user is already user already user_already_registered
		//2. Generate $salt
		//3. Create random password
		//4. Encrypt password
		//5. Register users
		//6. Send E-mail notification to the user 
		$ok = registerUser($name, $email);

		if($ok){
			$_SESSION['err_msg'] = "Successful registration";
		}
	}
	/* This only fires when user is being registered */

?>
<!-- begin body -->
<div class="container" style="max-width: 550px!important;">
<center><a href="/" target="_self"><img class="login-logo" alt="logo" src="../images/Logo.png" width="200" height="200"/></a></center>
		<form role="form" id="registrationForm" method="post">
				<div class="form-group">
			    <label for="formGroupExampleInput">Name</label>
			    <input type="text" class="form-control" id="userName" placeholder="Enter name" required>
  			</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
				</div>
<?php
			if($_SESSION['user_type'] == "ADMIN"){
?>
								<div class="form-group">
								    <label for="exampleFormControlSelect2">Client Type</label>
								    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
											<option>CHOOSE ONE</option>
								      <option>ADMINISTRATOR</option>
								      <option>AIRLINE</option>
								      <option>HOTEL</option>
								    </select>
				  			</div>
<?php 	}	  ?>
				<br/>
				<center><button type="submit" class="btn btn-lg btn-primary btn-block" onclick="validateUserRegistration(this.form)"
												style="color: #fff; background-color: #f96566!important; border-color: #f96566!important;">
												Register
								</button>
				</center>
		</form>
</div> <!-- /container -->

<!-- end body -->


<!-- begin footer -->
<?php echo $footer; ?>
<!-- end footer -->
