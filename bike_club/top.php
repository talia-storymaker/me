<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . 'ga-tag.html';
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $pagetitle; ?> - Bike Club</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 
</head>

<body
	<?php
		if ($pagetitle == 'Home') {
			echo ' class="home" ';
		}
	?>
>
	<div class="back-to-portfolio"><a href="https://www.taliadegisi.com/">By Talia DeGisi</a></div>
	<header>
		<nav>
			<button class="menu-button" onclick="if(document.querySelector('nav ul').className != 'revealed') {document.querySelector('nav ul').className='revealed';} else {document.querySelector('nav ul').className = '';}"><div>MENU</div> &#9776;</button>
			<ul class="primary">
				<li><a href="membership.php">Membership</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="about.php">About</a>
					<ul>
						<li><a href="sponsors.php">Sponsors</a></li>
					</ul>
				</li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<h1><a href="index.php"><img src="images/bike-logo.svg" height="75" alt="Bike Club Logo">Bike Club</a></h1>
	</header>