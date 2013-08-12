<?php

include 'db_connect.php';
#include 'functions.php';
#sec_session_start(); 
 
if(isset($_POST['email'], $_POST['p'])) { 
    $email = $_POST['email'];
    $password = $_POST['p']; 
    if(login($email, $password, $mysqli) == true) {
        // Login success
        echo 'Success: You have been logged in!';
    } else {
        // Login failed
        header('Location: ./login.php?error=1');
    }
}

echo <<<_END
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Embers Of Solace</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      <!--
	  @import url("layout.css");
      -->
    </style>
  </head>
 <body class="subpage3">
    <div id="header">
      <div id="logo">
	<h1>Embers Of Solace</h1>
      </div>
     <div id="search" class="bg1">
	<div id="searchLinks">
	   <a href="login.php" id="menu3" accesskey="3" title="" class="link1"><span>Login  | </span></a>
	   <a href="register.php" id="menu3" accesskey="3" title="" class="link1"><span>Register</span></a>
	</div>
	<form id="form1" name="form1" method="post" action="">
	    <table width="269" height="150" border="0" cellspacing="0" cellpadding="0">
	       <tr>
		  <td><input type="text" name="textfield" class="input1" style="width: 186px;" /></td>
		  <td align="right"><input type="submit" name="Submit" value="Search" class="input2" /></td>
	       </tr>
	    </table>
	 </form>
      </div>
    </div>
    <div id="menu" class="bg2">
      <ul>
	<li class="first"><a href="index.html" id="menu1" accesskey="1" title="" class="link1"><span>Home</span></a></li>
	<li><a href="#" id="menu3" accesskey="3" title="" class="link1"><span>Downloads</span></a></li>
	<li><a href="#" id="menu5" accesskey="5" title="" class="link1"><span>Story</span></a></li>
	<li><a href="#" id="menu6" accesskey="6" title="" class="link1"><span>Gallery</span></a></li>
	<li><a href="#" id="menu10" accesskey="10" title="" class="link1"><span>Server Status</span></a></li>
	<li><a href="#" id="menu11" accesskey="11" title="" class="link1"><span>Wiki</span></a></li>
	<li><a href="#" id="menu7" accesskey="2" title="" class="link1"><span></span></a></li>
      </ul>
    </div>
    <br>
      <br>

	<div id="boxTop"></div>
	<div id="content" class="bg3">
	  <div id="box6">
	    
	    <div class="content">
	      <h3 class="text3"></h3>
	      <section class="login">
		<div class="titulo">Login</div>
		<form action="#" method="post" enctype="application/x-www-form-urlencoded">
		  <input type="text" required title="Username required" placeholder="Username" data-icon="U">
		    <input type="password" required title="Password required" placeholder="Password" data-icon="x">
		      <br>
		      <a href="#" class="enviar">Submit</a>
		      <div class="olvido">
			<div class="col"><a href="register.php" title="Register">Register</a></div>
			<div class="col"><a href="#" title="Forgot Password">Forgot Password?</a></div>
		      </div>
		    </form>
		  </section>
	    </div>
	  </div>
	  <div style="clear: both;">&nbsp;</div>
	</div>
	<div id="footer">
	  <p class="text8">Copyright (c) 2013 Embers of Solace. All rights reserved.</p>
	</div>
	
      </body>
    </html>
_END;
?>