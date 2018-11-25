<!--
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/
-->
<?php include_once('../services/sessions.php'); ?>

<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff!important;">
  <a class="navbar-brand" href="home.php">
    <img alt="logo" src="../images/Logo.png" width="100" height="100"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tools
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Place Orders</a>
          <a class="dropdown-item" href="#">View Orders</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php?logout=1">Log Out</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Track Deliveries" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  <!-- PFOILE -->
  <ul class='nav' style='margin: 3%!important;'>
        <li class='dropdown dark user-menu'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <span class='user-name'></span>
                <div class='green_icon'>
                    <div id='user'><?php echo $_SESSION['name']; ?></div>
                </div>
              </a>
              <ul class='dropdown-menu'>
                <li>
                  <a href='user_profile.html'>
                    <i class='fa fa-user'></i>
                    Profile
                  </a>
                </li>
                <li>
                  <a href='user_profile.html'>
                    <i class='fa fa-cog'></i>
                    Settings
                  </a>
                </li>
                <li class='divider'></li>
                <li>
                  <a href='sign_in.html'>
                    <i class='fa fa-sign-out'></i>
                    Sign out
                  </a>
                </li>
              </ul>
        </li>
    </ul>
</nav>
