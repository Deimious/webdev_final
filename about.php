<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<link href="index.css" rel="stylesheet" type="text/css">
	<script></script>
	<title>About</title>
    </head>
    <body>
	<ul id="navbar">
	    <li class="navbar_items"><a href="index.php">Albums</a></li>
	    <li class="navbar_items"><a href="music_videos.php">Music Videos</a></li>
	    <li class="navbar_items active"><a href="about.php">About</a></li>
	    <li class="navbar_items" id="log_in_out"><a href="logout.php">Logout</a></li>
	</ul>
	<?php

	    if(!session_start()){
		header("Location: error.php");
		exit;
	    }

	    $logged_in = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

	    if(!$logged_in){
		$error = "Error. You must be logged in to view this content.";
		header("Location: login_page.php");
		exit;
	    }
	?>
    </body>
    <br><br>
    <h1>Dylan Bunch</h1>
    <h2>Known Languages
	<ul>
		<li>C</li>
		<li>Java</li>
		<li>Python</li>
		<li>Javascript/JQuery</li>
		<li>HTML/CSS</li>
		<li>SQL</li>
		<li>PHP</li>
	</ul>
    </h2>
    <h2>Taken Courses
	<ul>
		<li>CS4050: Design and Analysis of Algorithms</li>
		<li>CS3330: Object-Oriented Programming</li>
		<li>CS4320: Software Engineering I</li>
		<li>CS3380: Database Applications and Information Systems</li>
		<li>CS3050: Advanced Algorithm Design</li>
		<li>CS2380: Introduction to the Internet, WWW, and Multimedia Systems</li>
	</ul>
    </h2>
    <h2>Projects
	<h3>CS3330</h3>
	    <p>For the final in object-oriented programming I wrote a music player in JavaFX. The player can open any number of music files, play them consecutively, save the playlist to file for later use, and has a visualizer.</p>
	<h3>CS3050</h3>
	    <p>For the third machine problem in advanced algorithm design my group and I made an algorithm to detect the strongly-connected-components of a graph, build a graph of the strongly connected components that corresponded to the original, and find the shortest path from a point to another point in that graph.</p>
	<h3>CS4320</h3>
	    <p>In software engineering, the main project we had to do was design a machine-learning algorithm to analyze the algorithms for the Journalism school at Mizzou to reduce their 20TB database down by removing their bad images. We used Python, HTML/CSS/JS/JQuery, and Flask. My specific role in the group was to design the api to interconnect the classifier and the website.</p>
	<h3>CS2830</h3>
	    <p>My final project in web development is this website, written in HTML/CSS/JS/JQuery/PHP/SQL.</p>
    </h2>
    <h2>Experience 
	<h3>State of Missouri: Department of Higher Education (ITSD)</h3>
	    <p>As an intern at the State of Missouri's ITSD most of my job was managing support tickets for their website and writing/editing code to fix the issues in Java EE and JQL.</p>
    </h2>
    <h2>Education
	<h3>University of Missouri, Columbia</h3>
	    <p>Currently working on attaining a BS in Computer Science. Senior. 3.4 GPA. 2015-2020.</p>
    </h2>
</html>
