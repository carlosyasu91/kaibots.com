<?php include 'header.php'; 
session_start();?>
<body>
<div class="background-container">
<div class="container main-container">
<h2 style="text-align:center" class="missionheader"><?php echo gallery;?></h2>

<script type="text/javascript">
$(function() {
    $('#thumbnails a').lightBox();
});
</script>
<div class="galleryblock">
	<div id="w">
    	<div id="content">
			<div id="thumbnails">
 				<ul class="clearfix">
     				<li><a href="images/gallery/icon1.png" title="App Icon Type 1"><img src="images/gallery/icon1-thumbnail.png" alt="turntable"></a></li>
     				<li><a href="images/gallery/icon2.png" title="App Icon Type 2"><img src="images/gallery/icon2-thumbnail.png" alt="turntable"></a></li>
                    <li><a href="images/gallery/icon3.png" title="App Icon Type 3"><img src="images/gallery/icon3-thumbnail.png" alt="turntable"></a></li>
                    <li><a href="images/gallery/splashart.png" title="Torb looking cool"><img src="images/gallery/splashart-thumbnail.png" alt="turntable"></a></li>
                    <li><a href="images/gallery/logo.png" title="Powerful Logo"><img src="images/gallery/logo-thumbnail.png" alt="turntable"></a></li>
 				</ul>
			</div>
    	</div>
	</div>
</div>
</div>
</div>

<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<?php include 'footer.php'; ?>
</body>