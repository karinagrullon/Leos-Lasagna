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

	<body>
		<?php require('views/publicNav.php');  ?>

		<!-- BODY AFTER NAVIGATION -->
		<div class="home-all">
			<div class="jumbotron jumbotron-fluid text-center">
				<div class="container">
					<h1 class="display-4">Would You Like To Place An Order?</h1>
					<a href='views/placeOrder.php'  target='_self'><button type="button" class="btn btn-outline-light">Place Order</button></a>
				</div>
			</div>

			<div class="jumbotron jumbotron-fluid text-center">
				<div class="container">
					<h1 class="display-4">Try One Of Our Best Selling Lasagne</h1>
					<br/>
					<!-- This part might need some back-end. Might need to go to the database to find this info-->
					<p class="lead"><?php include_once('views/bestSellerProducts.php'); ?></p>
				</div>
			</div>

			<div class="jumbotron jumbotron-fluid text-center">
				<div class="container">
					<h1 class="display-4">About Us</h1>
					<p class="lead">
						Leos Lasagne actually represents three different names. The current owner is Leo. The previous owner was his father also named Leo and prior to him his grandfather also named Leo! The incredible family recipe initially created by Leo&apos;s grandfather who lived in Nepal. After his grandfather&apos;s return from World War II grandfather Leo learned the recipe from his mother and discovered his love for cooking. Eager to share the delicious taste of the incredible family meal led to the idea to create a business and Leos Lasagne took off! Leo&apos;s father continued the traditional recipe and brought it to Brooklyn,
						New York. Leo&apos;s father has taught him the recipe and the tradition continues to thrive!
					</p>
				</div>
			</div>
		</div>
	</body>
</html>
