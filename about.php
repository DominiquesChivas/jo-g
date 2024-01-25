<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
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
    <!-- header -->
    <div class="navbar">
        <div>
            <a href="index.php"><p class="logo-navbar">JOJI</p></a>
        </div>
        <div class="menu-merch color1">
            <ul>
				<li><a href="merchandise.php">Merchandise</a></li>
                <li><a href="about.php">About</a></li>
				<li><a href="summary.php">Cart</a></li>
                <li><a onclick="return confirm('Logout?');" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
	<div class="section2">
		<img src="franku.jpg" alt="Frank">
		<h2>The Filthy Frank Show (2011 - 2017)</h2> <hr class="hr"> <br>
		<p>Miller created the "Filthy Frank" character during his time on his DizastaMusic YouTube channel, on which he created sketch comedy-based content. The channel started gaining popularity after his 2012 conceptualization of Filthy Frank, a character who was described as the anti-vlogger of YouTube by Miller. The first known video on this particular channel (before his creation of the Frank character) was uploaded on 19 June 2008, and was titled "Lil Jon falls off a table". The DizastaMusic channel has over 1 million subscribers and 177 million views as of October 2021. On 15 August 2014, Miller uploaded a video to the DizastaMusic channel announcing that he would not be posting any more video content onto the channel due to the risk of losing the channel due to the numerous copyright and community strikes it received. He also announced that future "Filthy Frank" content would be uploaded to a new channel he had created called TVFilthyFrank. </p><br>

		<p>Miller's channel TVFilthyFrank had many different series, such as "Food" (和食ラップ), "Japanese 101", "Wild Games" and "Loser Reads Hater Comments". This channel currently has a total of 7.76 million subscribers and over one billion views as of October 2021. Miller created a third channel, TooDamnFilthy, on 1 July 2014. On this channel he had two series, "Japanese 101", which was also featured on his main channel, and "Cringe of the Week", which was usually abbreviated to "COTW". As of October 2021, TooDamnFilthy has 2.33 million subscribers and 332 million views.</p><br>
			
		<p>On 27 September 2017, Miller announced the release of his first and currently only book, titled Francis of the Filth, which addresses things uncovered in The Filthy Frank Show, and serves as a culmination of the series.</p><br>
			
		<p>On 29 December 2017, Miller released a statement on Twitter explaining that he had stopped producing comedy, including Filthy Frank, due to both "serious health conditions" and his lack of interest in continuing the series. In September 2018, Miller stated in a BBC Radio 1 interview that he had no choice but to stop producing comedy due to his health condition.</p>
	</div>
	<div class="section3">
		<img src="stagejoji.jpg" alt="Joji">
		<h2>Musical Career</h2> <hr class="hr2"> <br>
		<p>Aside from the comedic and often rap-based music he created under the Pink Guy alias, Miller also created more serious and traditional music under another stage name, Joji, which became his primary focus in late 2017. Speaking on his transition from his YouTube career to his music career as Joji, Miller said to Billboard "now I get to do stuff that I want to hear." In the article by Billboard, he specified that 'Joji' isn't a character like Filthy Frank and Pink Guy. "I guess that's the difference," he continues. "Joji's just me."</p> <br>

		<p> During his time growing up in Higashinada-ku, Kobe, Japan, Miller began to produce music and sing with friends as a side-hobby and a way to pass the time. After relocating to Manhattan, New York, Miller expanded upon his music career by starting his Pink Guy persona, which paved the way for his Joji persona. Miller originally announced his Joji album on 3 May 2014 alongside the first Pink Guy album. However, Miller subtly cancelled the project until he began releasing music under the name PinkOmega. Miller released two songs as PinkOmega: "Dumplings" on 4 June 2015 and "wefllagn.ii 5" on 28 August 2015, both of which were later released on the Pink Guy album Pink Season, the latter being re-titled "We Fall Again".</p> <br>
			
		<p> Miller intended to keep the music made under Joji a secret from his fanbase due to them mainly wanting his comedic music. In late 2015, two singles were released, titled "Thom" and "You Suck Charlie"; both were released under a false alias, but it was quickly leaked that the user behind the account was Miller, which prompted him in January 2016 to publicly announce on Instagram that he was releasing a full-length commercial project titled Chloe Burbank: Volume 1. In the same post, he linked his SoundCloud account.</p> <br>
			
		<p>In 2017, Joji released several songs via the YouTube channel of Asian music label 88rising, the songs "I Don't Wanna Waste My Time", released on 26 April 2017, "Rain on Me", released on 19 July 2017, and "Will He", released on 17 October 2017. Joji was featured in the song "Nomadic" with the Chinese rap group Higher Brothers. Miller performed live as Joji for the first time on 18 May 2017 in Los Angeles. The event was streamed by the Boiler Room. On 17 October 2017, Miller released the debut single from his debut commercial project, In Tongues. The single, titled "Will He", was released on platforms Spotify and iTunes.</p> <br>
			
		<p>Miller's debut project under the moniker Joji, an EP titled In Tongues, was released on 3 November 2017 by Empire Distribution. A deluxe version of the EP was released on 14 February 2018 with 8 remixes of songs from the EP along with the release of "Plastic Taste" and "I Don't Wanna Waste My Time" as part of the track listing. Joji released the song "Yeah Right" in May 2018, becoming his first to chart on a Billboard chart, peaking at 23 on the Billboard R&B Songs chart.</p> <br>
	</div>
    <!-- footer -->
    <?php
	include "footer.php";
	?>