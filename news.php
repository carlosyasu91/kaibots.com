<?php include 'header.php'; 
		
include_once('includes/connection.php');
include_once('includes/news.php');

$news = new News;
$query = $pdo->prepare("SET NAMES 'utf8'");
$query->execute();

$newscontent = $news->fetch_all();
?>


<h2 style="text-align:center" class="missionheader">News feed</h2>
<div class="newsblock">
	

<div id="news">
		<ul id="mainlist" style="list-style-type:none">
			<?php foreach($newscontent as $newsitem){ ?>
			<li >
				<div id="containerindex">
				<a href="estado.php?id=<?php echo $estado['estados_id'];?>">
					<p class="trigger"><a href="#"><?php echo $newsitem['title']; ?></a>
						<small style="margin-left:15px"><?php 
							$originalDate = $newsitem['date'];
						$newDate = date("d M Y", strtotime($originalDate));
						echo $newDate?></small>
					</p>
					<div class="toggle_container">
        <?php echo $newsitem['content']?>
</div>
</div>

					</a>
				</div>


					</li>
			<?php } ?>
		</ul>
</div>
</div>

<script type="text/javascript">

$(".toggle_container").hide();
    $("p.trigger").click(function(){
        $(this).toggleClass("active").next().slideToggle("normal");
    });

</script>
<?php include 'footer.php'; ?>