<!DOCTYPE HTML>
<html>
<head>
<title>Q | Development</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="custom/js/prototype.js" type="text/javascript"></script>
<script src="custom/vendor/custom.modernizr.js"></script>
<script src="custom/js/scriptaculous.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="custom/foundation.min.css" />
<link rel="stylesheet" type="text/css" href="custom/main.css" />
<link rel="stylesheet" type="text/css" href="custom/fonts/general_enclosed_foundicons.css" />
<?php include 'dbconnect.php'; ?>
</head>
<body>

<nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="#">
            Q
          </a>
        </h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
 
    <section class="top-bar-section">
      <!-- Right Nav Section -->
     <ul class="right">
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Grab Your Databases!</a>
          <ul class="dropdown">
            <li><label>Enter your database settings below for SELECT</label></li>
			<form action="index.php" method="get">
            <li>Enter the Database Name to select data from: <input placeholder="Your DB Name Here..." type="text" name="fname"></li>
			<li>Enter the Table Name to select data from: <input placeholder="Your DB Table Name Here..." type="text" name="tablename"></li>
            <li>Enter the Username for the Database: <input placeholder="Your DB Userame Here..." type="text" name="user"></li>
            <li>Enter the Password for the Database: <input placeholder="Your DB Password Here..." type="text" name="pass"></li>
			<li class="divider"></li>
			<li><div href="/" class="button success radius">Start From Scratch!</div></li>
            <li class="divider"></li>
            
          </ul>
		  <ul class="dropdown newdrop">
            <li><label>Enter your database settings below for INSERT</label></li>
			<li>Enter the Database Name to insert data into: <input placeholder="Your DB Name Here..." type="text" name="fname1"></li>
			<li>Enter the Table Name to insert data into: <input placeholder="Your DB Table Name Here..." type="text" name="tablename1"></li>
            <li>Enter the Username for the Database: <input placeholder="Your DB Userame Here..." type="text" name="user1"></li>
            <li>Enter the Password for the Database: <input placeholder="Your DB Password Here..." type="text" name="pass1"></li>
			<li class="divider"></li>
            <li><input class="button success radius" value="Grab Them now!" type="submit"></li>
			<li class="divider"></li>
			</form>
          </ul>
        </li>
        <li class="divider"></li>
        <!-- <li><a href="#">Main Item 2</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Main Item 3</a>
          <ul class="dropdown">
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li> -->
      </ul> 
    </section>
  </nav>
 