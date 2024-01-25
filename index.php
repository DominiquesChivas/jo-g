<?php
session_start();

require "functions.php";

if (!isset($_SESSION["login"])) {
	global $conn;
	mysqli_query($conn, "DELETE FROM keranjang");

	header("Location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
	<title>It's Papa Franku</title>
</head>
<body>
	<div class="hero">
		<!-- header -->
		<div>
			<a href="index.php"><p class="logo">JOJI</p></a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="merchandise.php">Merchandise</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="summary.php">Cart</a></li>
				<li><a onclick="return confirm('Logout?');" href="logout.php">Logout</a></li>
			</ul>
		</div>
		<!--  -->
		<div class="text-container">
			<h2>George Miller</h2><br>
			<p>Commonly known as Joji, Filthy Frank, or Pink Guy</p>
		</div>
	</div>
	<div class="section1">
		<div class="img1">
			<img src="img/frank2.jpg">
		</div>
		<div class="frank-text">
			<h2>"Welcome to the rice field, m***********"</h2><br>
			<p>It was a quote by Filthy Frank from his video "HOW TO SAY HELLO IN 30 LANGUAGES". It became popular quote and catchphrase among his fans and has spread in various image macros </p>
		</div>
	</div>
	
    <div class="about">
		<div class="txt txt2">
			<p>In 2013, George Miller — called Joji — wasn't known for his music. He was known as a hugely popular comic YouTube personality called Filthy Frank, in the tradition of Jackass. But there are no traces of that earlier, cruder identity on the night he descends on Manhattan's Bowery Ballroom for a packed show.

			He's there to perform his brand of hypnotic R&B for a crowd that seems to know every word. For good reason: his debut album, October's Ballads 1, topped Billboard's R&B/Hip-Hop chart, becoming the first project from an Asian-born artist to do so, and his songs have since racked up nearly half a billion streams on Spotify alone. Joji's music is melancholy and layered, mixing tender melodies with edgy lyrical content. His persona is low-key funny, social media feeds dappled with bad-angle selfies and jokes delivered in meme language. His videos are cryptic and dark.</p>
		</div>
		<div class="img1-abt">
			<img src="img/george1.jpg" alt="joji">
		</div>
		<div class="img2-abt">
			<img src="img/george2.jpg" alt="joji">
		</div>
		<div class="txt2">
			<p>“I'm just a quirky, quirky guy,” he shrugs backstage just before the show in the theater's cramped green room.

			Joji, who is half Australian and half Japanese, grew up in Osaka, Japan. He taught himself how to make music using GarageBand after hearing Lil Wayne's 2008 hit “A Milli” and wanting to recreate the beat. (Joji's other favorites early on were 50 Cent and Limp Bizkit.) “I tried drum lessons for a month and didn't learn anything, couldn't do it,” he admits now. He tested out ukulele, piano and guitar — but is the first to admit that his strength is not in formal training, but instead in his knack for unusual production.</p>
		</div>
	</div>
	<div class="section4">
		<h2>Songs</h2>
		<div class="songs">
			<div class="song">
				<a href="https://www.youtube.com/watch?v=ulMHhPHYCi0" class="song-desc" target="_blank">
					<h4>Attention</h4>
					<p>Ballads 1</p>
				</a>
			</div>
			<div class="song album2">
				<a href="https://www.youtube.com/watch?v=OLpeX4RRo28" class="song-desc" target="_blank">
					<h4>Stfu</h4>
					<p>Pink Season</p>
				</a>
			</div>
			<div class="song album3">
				<a href="https://www.youtube.com/watch?v=R2zXxQHBpd8" class="song-desc" target="_blank">
					<h4>Will He</h4>
					<p>In Tongues</p>
				</a>
			</div>
			<div class="song album4">
				<a href="https://www.youtube.com/watch?v=K09_5IsgGe8" class="song-desc" target="_blank">
					<h4>Run</h4>
					<p>Nectar</p>
				</a>
			</div>
			<div class="song album2">
				<a href="https://www.youtube.com/watch?v=LeMVDuIO3J0" class="song-desc" target="_blank">
					<h4>Rice Balls</h4>
					<p>Pink Season</p>
				</a>
			</div>
			<div class="song album3">
				<a href="https://www.youtube.com/watch?v=hgV1Y3cv35I" class="song-desc" target="_blank">
					<h4>Worldstar Money(interlude)</h4>
					<p>In Tongues</p>
				</a>
			</div>
			<div class="song album1">
				<a href="https://www.youtube.com/watch?v=K3Qzzggn--s" class="song-desc" target="_blank">
					<h4>Slow Dancing In The Dark</h4>
					<p>Ballads 1</p>
				</a>
			</div>
			<div class="song album4">
				<a href="https://www.youtube.com/watch?v=YWN81V7ojOE" class="song-desc" target="_blank">
					<h4>Sanctuary</h4>
					<p>Nectar</p>
				</a>
			</div>
			<div class="song">
				<a href="https://www.youtube.com/watch?v=tG7wLK4aAOE" class="song-desc" target="_blank">
					<h4>Yeah Right</h4>
					<p>Ballads 1</p>
				</a>
			</div>
			<div class="song album3">
				<a href="https://www.youtube.com/watch?v=Yw1tCJ1y34o" class="song-desc" target="_blank">
					<h4>Demons</h4>
					<p>In Tongues</p>
				</a>
			</div>
		</div>
	</div>
	<?php
	include "footer.php";
	?>