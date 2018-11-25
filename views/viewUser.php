<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
$sessions = "{$base_dir}services{$ds}sessions.php";

require($sessions);

if(isset($_SESSION['name']) || isset($_COOKIE["loginID"])){
  $name = $_SESSION['name'].' '.$_COOKIE["loginID"];
  echo "<div id='user'><strong>".$name."</strong></div>";
}

?>
