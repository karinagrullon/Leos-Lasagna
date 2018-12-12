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

include_once('../services/sessions.php');

$header = file_get_contents('header.php');
$footer = file_get_contents('footer.php');
$modals = file_get_contents('modals.php');
?>
<style>
		.form-group {
			margin-bottom: 0.1em!important;
		}
</style>
<?php
	/* begin header */
	echo $header;
	/* end header */

	/* set current page */
	$GLOBALS['currentPage'] = PLACEORDER;

	if($_SESSION['user_type'] != "ADMIN" && isset($_SESSION['id'])){
		include_once('menu.php');
		//get client information and populate fields
		$sqlUser = "SELECT * FROM `users` WHERE `user_id` = '".$_SESSION['id']."'";
		$resultUser = mysqli_query($GLOBALS['link'], $sqlUser);
		if($rowUser = $resultUser->fetch_array(MYSQLI_ASSOC)){
			$name = $rowUser['user_name'];
			$email = $rowUser['user_email'];
			$address = $rowUser['user_address'];
			$city = $rowUser['user_city'];
			$state = $rowUser['user_state'];
			$zip = $rowUser['user_zipcode'];
			$phone = $rowUser['user_phone'];
		}
		?>
						<!-- begin body -->
						<div class='jumbotron jumbotron-fluid text-white'>
								<div class="container">
										<form id="placeOrder" action="../../development/services/processOrder.php" method="POST">
											<div class="col-sm-6">
												<div class="form-row"><h2>Ship To:</h2> </div>
													<div class="form-group">
														<input type="text" class="form-control" name="userName" placeholder="Enter name" value="<?php echo $name; ?>" required>
													</div>
													<div class="form-group">
														<input type="email" class="form-control" name="userEmail" placeholder="Enter email" value="<?php echo $email; ?>" required>
													</div>
													<div class="form-group">
														<input type="text" class="form-control" name="userAddress" placeholder="Enter address" value="<?php echo $address; ?>" required>
													</div>
													<div class="form-row">
														<div class="col-4">
																<input type="text" class="form-control" name="userCity" placeholder="Enter city" value="<?php echo $city; ?>" required>
														</div>
														<div class="col-4">
															<input type="text" class="form-control" name="userState" placeholder="Enter state (eq. NY)" value="<?php echo $state; ?>" required>
														</div>
														<div class="col-4">
															<input type="text" class="form-control" name="userZip" placeholder="Enter zipcode (eq. 10469)" value="<?php echo $zip; ?>" required>
														</div>
													</div>
													<div class="form-group">
														<input type="text" class="form-control" name="userPhone" placeholder="Enter phone (###-###-####)" value="<?php echo $phone; ?>" required>
													</div>
											</div>
											<hr/>
											<div class="row"><h2>Select Lasagne(s):</h2></div>
											<div class="row">
															<div class="col-sm">
																<table width="90%" class="table table-striped table-bordered table-hover" style="opacity: 0.97!important;" id="dataTables-example">
																			<thead>
																				<tr>
																					<th>Choose</th>
																					<th>Actual View</th>
																					<th>Flavor</th>
																					<th>Qty</th>
																					<th>Unit Cost</th>
																				</tr>
																			</thead>
																	<tbody>
																							<div class="form-group col-md-1">
																								<tr><td><center><input class="form-check-input" type="checkbox" value="" id="cheeseCheck"></center></td>
																							</div>
																							<div class="form-group col-md-3" style="vertical-align: middle!important;">
																									<td><center><img alt="Plain Cheese Lasagna"
																									src="../images/plain_cheese.jpg" width="100" height="90"
																									style="border:4px solid #fff;" title="Plain Cheese"/>
																									</center></td>
																							</div>
																							<div class="form-group col-md-3" style="padding-left: 5%; padding-right: 5%; background-color: transparent!important;">
																								<td><input type="text" class="form-control" name="lasagnaType" value="Plain Cheese" disabled></td>
																							</div>
																							<div class="form-group col-md-3" style="padding-left: 5%; padding-right: 5%; background-color: transparent!important;">
																								<td><input type="number" class="form-control" name="lasagneQty" value="0"></td>
																							</div>
																							<div class="form-group col-md-5" style="padding-top: 5px;">
																								<td><input type="number" class="form-control" name="priceUnit" style="opacity: 0.97!important;" value="4.00"></td></tr>
																							</div>


																							<div class="form-group col-md-1">
																								<tr><td><center><input class="form-check-input" type="checkbox" value="" id="cheeseCheck"></center></td>
																							</div>
																							<div class="form-group col-md-3" style="vertical-align: middle!important;">
																									<td><center><img alt="Plain Cheese Lasagna"
																									src="../images/spinach.jpg" width="100" height="90"
																									style="border:4px solid #fff;" title="Plain Cheese"/>
																									</center></td>
																							</div>
																							<div class="form-group col-md-3" style="padding-left: 5%; padding-right: 5%; background-color: transparent!important;">
																								<td><input type="text" class="form-control" name="lasagnaType" value="Spinach" disabled></td>
																							</div>
																							<div class="form-group col-md-3" style="padding-left: 5%; padding-right: 5%; background-color: transparent!important;">
																								<td><input type="number" class="form-control" name="lasagneQty" value="0"></td>
																							</div>
																							<div class="form-group col-md-5" style="padding-top: 5px;">
																								<td><input type="number" class="form-control" name="priceUnit" style="opacity: 0.97!important;" value="4.39"></td></tr>
																							</div>

																							<div class="form-group col-md-1">
																								<tr><td><center><input class="form-check-input" type="checkbox" value="" id="cheeseCheck"></center></td>
																							</div>
																							<div class="form-group col-md-3" style="vertical-align: middle!important;">
																									<td><center><img alt="Plain Cheese Lasagna"
																									src="../images/vegetarian.jpg" width="100" height="90"
																									style="border:4px solid #fff;" title="Plain Cheese"/>
																									</center></td>
																							</div>
																							<div class="form-group col-md-3" style="padding-left: 5%; padding-right: 5%; background-color: transparent!important;">
																								<td><input type="text" class="form-control" name="lasagnaType" value="Vegetarian" disabled></td>
																							</div>
																							<div class="form-group col-md-3" style="padding-left: 5%; padding-right: 5%; background-color: transparent!important;">
																								<td><input type="number" class="form-control" name="lasagneQty" value="0"></td>
																							</div>
																							<div class="form-group col-md-5" style="padding-top: 5px;">
																								<td><input type="number" class="form-control" name="priceUnit" style="opacity: 0.97!important;" value="6.98"></td></tr>
																							</div>

																				</tbody>
																				</table>
																				<hr/>
																				<div align="right"><button type="submit" class="btn btn-outline-light btn-lg">Place Order</button></div>
																</div>
														</div> <!-- end of cold-sm -->
												</form>
												</div> <!-- enf of row -->
											</div> <!-- /container -->
											<center><?php echo $_SESSION['err_msg']; ?></center>
						</div> <!-- jumbotron -->

						<!-- end body -->
<?php
	}else{
		$_SESSION['err_msg'] = "You need to register/login before you can place an order!";
		$GLOBALS['warningMsg'].$_SESSION['err_msg'].$GLOBALS['closeMsg'];
		include_once('login.php');
	}
?>

<?php echo $modals; ?>
<!-- begin footer -->
<?php echo $footer; ?>
<!-- end footer -->
