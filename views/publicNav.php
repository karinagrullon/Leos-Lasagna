<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

echo '<!-- NAVIGATION -->
<nav class="navbar navbar-light">
  <a class="navbar-brand" href="/">
    <img alt="logo" src="../images/Logo.png" width="100" height="100"/>
  </a>
    <ul class="nav justify-content-end">
       <li class="nav-item">';
            if($GLOBALS['currentPage'] == INDEX){
                echo '<a class="nav-link text-dark" href="views/login.php">Login</a>';
            }else{
                echo '<a class="nav-link text-dark" href="login.php">Login</a>';
              }
  echo '</li>
        </ul>
      </nav>
      <!-- NAVIGATION -->';

?>
