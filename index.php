<!--
    name: Dylan Bunch
    pawprint: djbzf5
    assignment: final project
    date: 05/03/2019
-->

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <script type="text/javascript" src="scripts.js"></script>
	    <script type="text/javascript" src="jquery-3.40.min.js"></script>
	    <script>
		function login_button(){

		    var xhr = new XMLHttpRequest();
		    xhr.open('GET', 'change_button.php');
		    xhr.send();
		    xhr.onreadystatechange = function(){
			if (xhr.readyState === 4 && xhr.status === 200){
			    var button = document.getElementById('log_in_out');
			    var anchor = button.getElementsByTagName('a');
			    if(xhr.responseText == "false"){
				anchor[0].innerHTML = "Login";
			    } else {
				anchor[0].innerHTML = "Logout";
			    }
			}
		    }
		}
	    </script>
	    <link href="index.css" rel="stylesheet" type="text/css">
	    <title>WebDev Final Project Djbzf5</title>
	</head>
	<body onload="login_button()">
	    <ul id="navbar">
		<li class="navbar_items active"><a href="index.php">Albums</a></li>
		<li class="navbar_items"><a href="music_videos.php">Music Videos</a></li>
		<li class="navbar_items"><a href="about.php">About</a></li>
		<li class="navbar_items" id="log_in_out"><a href="logout.php"></a></li>
	    </ul>
	    <h1 id="title">My Top Albums</h1>
	    <div id="players_wrapper">
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=399623725/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://fitforanautopsy.bandcamp.com/album/absolute-hope-absolute-hell">Absolute Hope Absolute Hell by Fit For An Autopsy</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=263923895/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://riversofnihil.bandcamp.com/album/where-owls-know-my-name">Where Owls Know My Name by Rivers of Nihil</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=1816327774/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://ladlo.bandcamp.com/album/fugue-2">Fugue by Moonreich</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=2570363397/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://archaic-sound.bandcamp.com/album/the-blind-leading-the-blind">The Blind Leading the Blind by 1914</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=375284470/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://adventsorrow.bandcamp.com/album/as-all-light-leaves-her">As All Light Leaves Her by Advent Sorrow</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=302569069/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://no-solace.bandcamp.com/album/exercises-in-futility-lp-2015">Exercises in futility LP 2015 by Mgła</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=1209678071/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://deafheavens.bandcamp.com/album/new-bermuda">New Bermuda by deafheaven</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=4172227871/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://batushka.bandcamp.com/album/litourgiya">Litourgiya by Batushka</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=3773117271/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://dodecahedronsom.bandcamp.com/album/kwintessens">Kwintessens by Dodecahedron</a>
			</iframe>
		</div>
		<div class="wrappers">
			<iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=670926028/size=large/bgcol=020308/linkcol=0068d2/tracklist=false/transparent=true/" seamless>
				<a href="http://uada.bandcamp.com/album/cult-of-a-dying-sun">Cult of a Dying Sun by UADA</a>
			</iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=1827343739/size=large/bgcol=030607/linkcol=0068d2/minimal=true/transparent=true/" seamless>
			<a href="http://magoth.bandcamp.com/album/anti-terrestrial-black-metal">Anti Terrestrial Black Metal by Magoth</a>
		    </iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=3025669545/size=large/bgcol=030607/linkcol=0068d2/minimal=true/transparent=true/" seamless>
			<a href="http://numenorean.bandcamp.com/album/adore">Adore by Numenorean</a>
		    </iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=4284809173/size=large/bgcol=030607/linkcol=0068d2/minimal=true/transparent=true/" seamless>
			<a href="http://evp-recordings.bandcamp.com/album/the-satanist">The Satanist by BEHEMOTH</a>
		    </iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://bandcamp.com/EmbeddedPlayer/album=879531568/size=large/bgcol=030607/linkcol=0068d2/minimal=true/transparent=true/" seamless>
			<a href="http://zealandardor.bandcamp.com/album/stranger-fruit">Stranger Fruit by Zeal and Ardor</a>
		    </iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://open.spotify.com/embed/album/7GjVWG39IOj4viyWplJV4H" frameborder="0" allowtransparency="true" allow="encrypted-media">
		    </iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://open.spotify.com/embed/album/392Ys0ZiatVNzCrKMEswNM" frameborder="0" allowtransparency="true" allow="encrypted-media">
		    </iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://open.spotify.com/embed/album/7ABqA1tuH6eonHAIBaBqHe" frameborder="0" allowtransparency="true" allow="encrypted-media">
		    </iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://open.spotify.com/embed/album/79dL7FLiJFOO0EoehUHQBv" frameborder="0" allowtransparency="true" allow="encrypted-media">
		    </iframe>
		</div>
		<div class="wrappers">
		    <iframe class="bandcamp_players" src="https://open.spotify.com/embed/album/7D7V6M05UIOTjLdqbwRX0w" frameborder="0" allowtransparency="true" allow="encrypted-media">
		    </iframe>
		</div>
	    </div>
	    <img id="warning" src="warning.png" alt="Warning: Explicit Content">
	    </body>
</html>

