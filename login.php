<?php

if(!session_start()){
    header("Location: login_page.php");
    $error = "Error starting session.";
    exit;
}

$logged_in = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

if($logged_in){
    header("Location: index.php");
    exit;
}

$action = empty($_POST['action']) ? '' : $_POST['action'];

if($action == 'do_login'){
    handle_login();
} else {
    login_form();
}

function handle_login(){
    $username = empty($_POST['username']) ? '' : $_POST['username'];
    $password = empty($_POST['password']) ? '' : $_POST['password'];

    require_once 'db.conf';

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

   if($mysqli->connect_error){
	$error = 'Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
	require "login_page.php";
	exit;
    }

    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string(sha1($password));

    $query = "SELECT * FROM final WHERE username = '$username' AND password = '$password'";

    $result = $mysqli->query($query);

    if($result){
	$match = $result->num_rows;
	if($match == 1){
	    $_SESSION['loggedin'] = $username;
	    header("Location: music_videos.php");
	    exit;
	} else {
	    $error = "Error: Incorrect username or password";
	    require "login_page.php";
	}

	$result->close();
	$mysqli->close();

    } else {
	$error = "Login Error: Please contact the system administrator.";
	$result->close();
	$mysqli->close();
	header("Location: login_page.php");
	exit;
    }

}

function login_form(){
    $username = "";
    $error = "";
    exit;
}

?>
