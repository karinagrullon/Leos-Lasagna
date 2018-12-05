<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

class globalFunctions{

	public $client_id;
	public $driver_id;
	public $driver_name;
	public $driver_last;
	public $employee_code;
	public $device;
	public $url;

	public function cancelThis($tracking_id, $client_id, $host, $db, $login, $password){
				  mysql_connect($host, $db, $login, $password);
                  $sql = "UPDATE `deliveries_and_pickups` SET
				          `transaction_status_id`='4',
				          `delivery_culminated`=NOW()
						  WHERE `client_id`='$client_id' AND `delivery_id`='$tracking_id';";
				  mysql_query($sql);
                  $_SESSION['err_msg'] .= ' Delivery '.$tracking_id.' successfully canceled';
	}

	public function createLogin( $email,$client_id, $login, $password, $host, $db ){
    			 mysql_connect($host, $db, $login, $password);

						$marker = 5;
						$unique_login = 0;

						while ( !$unique_login ){
							$login = @substr( $email,0,$marker );
							$login = $login.$client_id;

							$sql_login = "SELECT user_login FROM users WHERE user_login = '$login'";
							$result_login = mysql_query($sql_login);
							$login_count = mysql_num_rows($result_login);

							if( $login_count >= 1 ){
								$marker += 1;
							}else{
								$unique_login = 1;
							}
						}
						return $login;
	}

	public function checkRoute($driver, $login, $password, $origin, $client, $host, $db){
		mysql_connect($host, $db, $login, $pass);

		$sql_route = "SELECT * FROM deliveries_and_pickups
					  INNER JOIN device ON deliveries_and_pickups.driver_unit_id=device.device_serial
					  WHERE deliveries_and_pickups.client_id = '$client_id'
					  AND device.device_serial = '$driver'
        		      AND deliveries_and_pickups.transaction_status_id = '6'";

		$result = mysql_query($sql_route);
		while($record = mysql_fetch_array($result)){
				$job = $record['job_id'];
				$order = $record['reference_1'];
				$destination = $record['delivery_address1'].' '.$record['delivevery_city'].' '.
							   $record['delivery_state'].' '.$record['delivery_zipcode'];
				$destination = str_replace(' ', '+', $destination);

				$sql_route_stop = "SELECT * FROM DriverRoute WHERE jobId = '$job' AND orderNo = '$order' AND routeStatus='A'";
				if (!mysql_query($sql_route_stop)){
				    $result_id = mysql_query("SELECT MAX(routeId) FROM DriverRoute");
                    $record_id = mysql_fetch_row($result_id);
					$routeId = $record_id['routeId'] + 1;


					$sql_route_insert = "INSERT INTO DriverRoute (`id`, `routeId`, `routeStatus`, `jobId`, `orderNo`, `driverCode`,
										`origin`, `destination`, `distance`,`timeEstimate`, `OrderQ`, `routingTime`)
										VALUES (NULL, '$route_id', 'A', '$job', '$order', '$driver', '$origin', '$destination', NULL,
											    NULL, NULL, NOW())";

					mysql_query($sql_route_insert);
				}
		}


	}

	public function generateRandomPassword($length) {
    	return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$&*()+"), 0, $length);
	}

	public function generateRandomDir($length) {
    	$core = substr(str_shuffle("0123456789"), 0, $length);
		$time_stamp = date("his");
		$dir = $core.$time_stamp;
		return $dir;
	}

	public function createDirStruc($dir){
		$dir1 = $dir."/logos";
		$dir2 = $dir."/filters";
		if(!mkdir($dir, 0777, true) && !mkdir($dir2, 0777, true)){
			return 0;
		}else{
			return 1;
		}
	}

	public function encryptPassword ( $password, $salt ){
		 return crypt($password, $salt);
	}

	public function validatePassword ( $passwd, $hashed_pwd ){
		    return crypt($passwd, $hashed_pwd) == $hashed_pwd;
	}

	public function setupCookie( $email, $ip, $digest, $status, $h, $d, $l, $p ){
		$sql = "INSERT INTO user_access_log(id, login, digest, ip_address, last_login, status) VALUES(NULL, '{$email}', '{$digest}', '{$ip}', NOW(), '{$status}');";
		mysqli_query($GLOBALS['link'], $sql);
	}

	public function emailUserPassword($name, $last, $user_type, $email, $login, $password, $copyright, $signature, $app_email, $admin_email, $software_name, $app_url){
			if (strtoupper(substr(PHP_OS,0,3)=='WIN')) {
  				$eol="\r\n";
			} elseif (strtoupper(substr(PHP_OS,0,3)=='MAC')) {
  				$eol="\r";
			} else {
  				$eol="\n";
			}

			$headers  = "From: ".$software_name." ".$app_email.$eol;
			$headers .= "Content-type: text/html".$eol;
			$subject  = "Important Information about your new ".$software_name." account".$eol;

			$url = $app_url."login.php?login=".$login."&password=".$password;

			//message
			$msg .= "Hi ".$name.' '.$last.'<br/><br/>';
			$msg .= "You have been set up with a new account in ".$software_name." as a ".$user_type.". You may start using it now using the information below.<br/><br/>";
			$msg .= "<table width='70%' border='0' cellspacing='2' cellpadding='1'>
					 <tr><td><a img src=".$app_url."images/logo.jpg.</td></tr>
					  <tr>
						<td bgcolor='#cc3333' style='color: #fff;'><center><strong>Field</strong></center></td>
						<td bgcolor='#cc3333' style='color: #fff;'><center><strong>Value</strong></center></td>
					  </tr>
					  <tr>
						<td>Username</td>
						<td><center>".$login."</center></td>
					  </tr>
					  <tr>
						<td>Password</td>
						<td><center>".$password."</center></td>
					  </tr>
					  <tr>
						<td>Access Link</td>
						<td><a href=".$url."><center>Click Here</center></a></td>
					  </tr>
					</table><br/>";
			$msg .= "If you are having issues accessing the system, please contact your administrator at ".$admin_email."<br/>";
            $msg .= "<hr/><br/>";
  			$msg .= $signature."<br/>";
			$msg .= $copyright."<br/>";

			$to = $email;

  			# SEND THE EMAIL
 			mail($to, $subject, $msg, $headers);
	}


	public function getCurrentDate(){
			$m = date('m');

			switch(intval($m)){
				case 1:
					$month = 'Jan';
					break;
				case 2:
					$month = 'Feb';
					break;
				case 3:
					$month = 'Mar';
					break;
				case 4:
					$month = 'Apr';
					break;
				case 5:
					$month = 'May';
					break;
				case 6:
					$month = 'Jun';
					break;
				case 7:
					$month = 'Jul';
					break;
				case 8:
					$month = 'Aug';
					break;
				case 9:
					$month = 'Sep';
					break;
				case 10:
					$month = 'Oct';
					break;
				case 11:
					$month = 'Nov';
					break;
				case 12:
					$month = 'Dec';
					break;
			}

			$d = date('d');
			$y = date('Y');
			$duedate = intval($d).' '.$month.' '.$y;
			return $duedate;
	}


	public function registerUser($name, $email, $type, $customer){
			$sql = "INSERT INTO users(user_id, user_type_id, user_client_id, user_name, user_middle_initial, user_last, user_email, user_phone,
													user_mobile, user_address, user_city, user_state, user_zipcode, user_token, user_salt, user_login, user_password)
							VALUES(NULL, '{$type}', '{$customer}', '{$name}', NULL, NULL, '{$email}', NULL, NULL, NULL, NULL, NULL, NULL, NULL,
											'{$salt}', '{$login}', '{$password}');";
			return mysqli_query($GLOBALS['link'], $sql) ? TRUE : FALSE;
	}
}
?>
