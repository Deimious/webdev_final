<?php

    echo "logout.php";

    print "checking session";

    if(!session_start()){
	print "checked session, bad";
	header("Location: error.php");
	exit;
    }

    print "session checked, good";

    $logged_in = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

    if(!$logged_in){
	$error = "Error. You're not logged in.";
	header("Location: login_page.php");
	exit;
    }

    print "unsetting session variables";

    //unset all session variables
    $_SESSION = array();

    //if the session was propogated using a cookie, remove that cookie
    if(ini_get("session.use_cookies")){
	$params = session_get_cookie_params();
	setcookie(session_name(), '', 1,
	    $params["path"], $params["domain"],
	    $params["secure"], $params["httponly"] 
	);
    }

    print "destroying session";

    //Destroy the session
    session_destroy();

    print "session destroyed, redirecting to login";

    //redirect to login
    header("Location: login_page.php");

    print "redirected to login";
    exit;

?>
