<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<link href="index.css" rel="stylesheet" type= "text/css">
	<title>Music Videos</title>
	<script>
	    $(function(){
		$("#video_list").selectable();
	    });

	    function fetch_embed_link(band_name){
		params = {"band_name": band_name};
		$.get("get_video.php", params, function(data){
		    $('#player_iframe').attr("src", data + "?&autoplay=1");
		});
	    }
	</script>
    </head>
    <body>
	<ul id="navbar">
	    <li class="navbar_items"><a href="index.php">Albums</a></li>
	    <li class="navbar_items active"><a href="music_videos.php">Music Videos</a></li>
	    <li class="navbar_items"><a href="about.php">About</a></li>
	    <li class="navbar_items" id="log_in_out"><a href="logout.php">Logout</a> </li>
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
	<div id="video_list_wrapper">
	    <div id="video_div">
		<ul id="video_list">
		    <li><a onclick="fetch_embed_link('ffaa')">Fit for an Autopsy</a></li>
		    <li><a onclick="fetch_embed_link('ron')">Rivers of Nihil</a></li>
		    <li><a onclick="fetch_embed_link('mr')">Moonreich</a></li>
		    <li><a onclick="fetch_embed_link('1914')">1914</a></li>
		    <li><a onclick="fetch_embed_link('as')">Advent Sorrow</a></li>
		    <li><a onclick="fetch_embed_link('mgla')">Mgła</a></li>
		    <li><a onclick="fetch_embed_link('dh')">Deafheaven</a></li>
		    <li><a onclick="fetch_embed_link('b')">Батюшка</a></li>
		    <li><a onclick="fetch_embed_link('ddchdrn')">Dodecahedron</a></li>
		    <li><a onclick="fetch_embed_link('uada')">Uada</a></li>
		    <li><a onclick="fetch_embed_link('m')">Magoth</a></li>
		    <li><a onclick="fetch_embed_link('nmnrn')">Numenorean</a></li>
		    <li><a onclick="fetch_embed_link('df')">Dark Funeral</a></li>
		    <li><a onclick="fetch_embed_link('mgmt')">MGMT</a></li>
		    <li><a onclick="fetch_embed_link('tbdm')">The Black Dahlia Murder</a></li>
		    <li><a onclick="fetch_embed_link('ti')">Tame Impala</a></li>
		    <li><a onclick="fetch_embed_link('atb')">After the Burial</a></li>
		    <li><a onclick="fetch_embed_link('an')">Anaal Nathrakh</a></li>
		    <li><a onclick="fetch_embed_link('a')">Archspire</a></li>
		    <li><a onclick="fetch_embed_link('be')">Behemoth</a></li>
		    <li><a onclick="fetch_embed_link('g')">Gojira</a></li>
		    <li><a onclick="fetch_embed_link('za')">Zeal and Ardor</a></li>
		</ul>
	    </div>
	    <iframe id="player_iframe" src="https://www.youtube.com/embed/NxLYJJnlGs8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<img id="warning" src="warning.png" alt="Warning: Explicit Content">
    </body>
</html>
