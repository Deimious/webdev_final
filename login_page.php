<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<link href="index.css" rel="stylesheet" type="text/css">
	<script></script>
	<title>Login</title>
    </head>
    <body>
	<ul id="navbar">
	    <li class="navbar_items"><a href="index.php">Albums</a></li>
	    <li class="navbar_items"><a href="music_videos.php">Music Videos</a></li>
	    <li class="navbar_items"><a href="about.php">About</a></li>
	</ul>
	<div id="wrapper_log">
	    <div id="login">

		<h1>Login</h1>
		<form action="login.php" method="POST">
		    <?php
		    if($error){
			print "<h2> $error </h2>";
		    } 
		    ?>
		    <input id="hidden" type="hidden" name="action" value="do_login">
		    <input id="uname" type="text" placeholder="Username" name="username">
		    <input id="pword" type="password" placeholder="Password" name="password">
		    <input id="log_button" type="submit" value="Login" name="log_button">
		</form>
		<a href="create_user_page.php">Don't have an account?</a>
	    </div>
	</div>
    </body>
</html>
