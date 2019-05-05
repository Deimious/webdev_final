<!DOCTYPE html>
<html>
    <head>
	<meta content="">
	<link href="index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript"></script>
	<title>Create Account</title>
    </head>
    <body>
	<ul id="navbar">
	    <li class="navbar_items"><a href="index.php">Albums</a></li>
	    <li class="navbar_items"><a href="music_videos.php">Music Videos</a></li>
	    <li class="navbar_items"><a href="about.php">About</a></li>
	</ul>
	<div id="wrapper_log">
	    <div id="login">
		<h1>Create Account</h1>
		<?php
		    if($error){
			print "<h2> $error </h2>";
		    }
		?>
		<form action="create_user.php" method="POST">
		    <input id="hidden" type="hidden" value="do_create" name="action">
		    <input id="uname" type="test" placeholder="Username" name="username">
		    <input id="pword" type="password" placeholder="Password" name="password">
		    <input id="c_pword" type="password" placeholder="Confirm Password" name="c_password">
		    <input id="log_button" type="submit" value="Create" name="create_button">
		</form>
		<a href="login_page.php">Already have an account?</a>
	    </div>
	</div>
    </body>
</html>
