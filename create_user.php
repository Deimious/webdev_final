<?php

if(!session_start()){
    header("Location: login_page.php");
    $error = "Error starting session.";
    exit;
}

$logged_in = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
print "something";
if(!$logged_in)
    print "else";
if($logged_in)
    print "or another";


if($logged_in){
    header("Location: create_user_page.php");
    $error = "You are logged in already.";
    exit;
}
print "we not logged in lul";

$action = empty($_POST['action']) ? '' : $_POST['action'];

if($action == 'do_create'){
    handle_create();
} else {
    create_form();
}

function handle_create(){
    $username = empty($_POST['username']) ? '' : $_POST['username'];
    $password = empty($_POST['password']) ? '' : $_POST['password'];
    $c_password = empty($_POST['c_password']) ? '' : $_POST['c_password'];

    require_once 'db.conf';

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
	$error = 'Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
	require "login_page.php";
	exit;
    }

    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string(sha1($password));
    $c_password = $mysqli->real_escape_string(sha1($c_password));

    if(strcmp($c_password, $password) != 0){
	$error = "Error. Your passwords do not match.";
	require "create_user_page.php";
	exit;
    }

    $query = "INSERT INTO final (username, password) values ('$username', '$password')";
    
    $result = $mysqli->query($query);

    if($result){
	$match = mysqli_affected_rows($mysqli);
	printf("match is %d", $match);
	if($match == 1){
	    $_SESSION['loggedin'] = $username;
	    header("Location: index.php");
	    exit;
	} else {
	    $error = "Error: Username taken.";
	    print "error is $error";
	    header("Location: create_user_page.php");
	}

	$result->close();
	$mysqli->close();
    } else {
	$error = "Error: Username taken.";
	print $error;
	print "closed";
	require "create_user_page.php";
    }

}

function create_form(){
    $username = "";
    $error = "";
    exit;
}

?>
