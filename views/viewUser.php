<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
$sessions = "{$base_dir}services{$ds}sessions.php";
//$cookies = "{$base_dir}services{$ds}processCookie.php";

require($sessions);

echo "<strong".$_SESSION['name'];

?>
