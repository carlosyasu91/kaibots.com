<?php 
$pageDescription = 'Information about the Kaibots mission, team and Torb';
$pageKeywords = 'kaibots,kaibot,arduino,torb,robotics,videogames';
$pageCanonical = 'http://www.kaibots.com/';
include 'header.php';
session_start(); ?>

<div class="container main-container">
<div>
<h2 style="text-align:center"><?php echo aboutfirst;?></h3>
<img src="images/appicon.gif" alt="Mountain View" class="center appicon">

<h3 style="text-align:center"><?php echo aboutsecond;?></h3>
<br>
<h3 style="text-align:center"><?php echo aboutthird;?><br></h3>
<h2 style="text-align:center"><?php echo torb?></h2>
<img src="images/splashart.jpg" alt="Mountain View" class="center splash">

</div>

<h2 style="text-align:center" class="missionheader"><?php echo missiontitle;?></h2>
<div class="aboutblock">
<p class="missiontext"><?php echo missiontext;?><br><br>
<?php echo combinetext;?>
</p><br>
</div>

<h2 style="text-align:center"><?php echo founderstitle?></h2>

<div class="aboutblock2">
<table class="founderstable">
	<tr>
		<td>
		<img src="images/profile/yasu.jpg" alt="Mountain View" class="left profile">
		</td>
		<td>
			<p>
			Carlos Yasunari Flores Mori<br>
			<i><?php echo yasudesc?></i>
			</p>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/profile/andrea.jpg" alt="Mountain View" class="left profile">
		</td>
		<td>
			<p>
			Andrea Melissa Castro<br>
			<i><?php echo andreadesc;?></i>
			</p>
		</td>
	</tr>
	<tr>
		<td>
		<img src="images/profile/daniel.jpg" alt="Mountain View" class="left profile">
		</td>
		<td>
			<p>
			Daniel Delgado<br>
			<i><?php echo danieldesc;?></i>
			</p>
		</td>
	</tr>
</table>
<br>
<!--<p class="missiontext">
<i><center>When and how did Kaibots start?</center></i>
January 2014, it all started as an idea robotics could be used to generate fun.
Yasu was inolved in robotics competitions and he noticed these robots are exclusive for engineers.
</p>-->
</div>
<!-- closing main container -->
</div>
<?php include 'footer.php'; ?>