<?php 
session_start();

//Define variables for the SEO markup
$pageDescription = 'Manabot is here, learn about arduino and build a robot controlled by your smartphone';
$pageKeywords = 'manabot,arduino,learn,robot,bluetooth,servomotors,3d,print';
$pageCanonical = 'http://www.kaibots.com/';

include 'header.php';
?>
<div class="background-container" >
<div class="container main-container">

<h2 class="welcome" style="text-align:center"><?php echo manabotheader; ?></h2>
<h3 style="text-align:center"><?php echo meetmessage;?></h3>
<h3 style="text-align:center"><?php echo kitincludes;?></h3><br>
<div class="parts-div">
<table class="parts-table">
<tr>
	<td class="parts-image">
		<img src="images/arduino-nano.gif" height="120">
	</td>
	<td class="parts-desc">
		<?php echo arduinonano;?>
	</td>
	<td>
		<?php echo arduinodesc;?>
	</td>
	<td></td>
</tr>
<tr>
		<td class="parts-image">
		<img src="images/gy-521.gif" height="120">
	</td>
	<td class="parts-desc">
		<?php echo accelerometer;?>
	</td>
	<td>
	<?php echo accelerometerdesc;?>
	</td>
</tr>
<tr>
	<td class="parts-image">
		<img src="images/servo.gif" height="120">
	</td>
	<td class="parts-desc">
		<?php echo servomotor;?>
	</td>
	<td>
<?php echo servomotordesc;?>
	</td>
</tr>
<tr>
		<td class="parts-desc">
		<img src="images/motor.gif" height="80">
	</td>
	<td class="parts-desc">
		<?php echo gearmotors;?>
	</td>
	<td>
		<?php echo gearmotorsdesc?>
	</td>
</tr>
<tr>
	<td class="parts-image">
		<img src="images/hm-10.gif" height="120">
	</td>
	<td class="parts-desc">
		<?php echo hm10;?>
	</td>
	<td>
		<?php echo hm10desc;?>
	</td>
</tr>
<tr>
		<td class="parts-image">
		<img src="images/manabot/board.gif" height="120">
	</td>
	<td class="parts-desc">
		<?php echo board;?>
	</td>
	<td>
		<?php echo boarddesc;?>
	</td>
</tr>
<tr>
	<td class="parts-desc">
		<img src="images/manabot/base.gif" height="110">
	</td>
	<td class="parts-desc">
		<?php echo bodypart;?>
	</td>
	<td><?php echo bodypartdesc;?></td>
</tr>
<tr>
<td class="parts-desc">
		<img src="images/manabot/upperpart.gif" height="120">
	</td>
	<td class="parts-desc">
		<?php echo upperpart;?>
	</td>
	<td>
		<?php echo upperpartdesc;?>
	</td>
</tr>
<tr>
	<td class="parts-image">
		<img src="images/manabot/bottompart.gif" height="100">
	</td>
	<td class="parts-desc">
		<?php echo lowerpart;?>
	</td>
	<td><?php echo lowerpartdesc;?></td>
</tr>
<tr>
		<td class="parts-image">
		<img src="images/manabot/sworo.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo sword;?>
	</td>
	<td><?php echo sworddesc;?></td>
</tr>
<tr>
	<td class="parts-desc">
		<img src="images/manabot/charger.gif" height="120">
	</td>
	<td class="parts-desc">
		<?php echo charger;?>
	</td>
	<td><?php echo chargerdesc;?></td>
<tr>
</tr>
		<td class="parts-desc">
		<img src="images/manabot/battery.gif" height="170">
	</td>
	<td class="parts-desc">
		<?php echo battery;?>
	</td>
	<td><?php echo batterydesc;?></td>
</tr>
</table>
</div>
<div style="text-align:center;margin:0 auto" 
data-background_color="ffffff" 
data-button_background_color="7db461" 
data-button_text_color="ffffff" 
data-buy_button_text="<?php echo buynow;?>" 
data-display_size="compact" data-embed_type="product" data-first_variant_id="1346947841" data-has_image="false" data-product_handle="manabot" data-product_name="Manabot" data-redirect_to="checkout" data-shop="kaibots.myshopify.com"></div>
<script type="text/javascript">
document.getElementById('ShopifyEmbedScript') || document.write('<script type="text/javascript" src="https://widgets.shopifyapps.com/assets/widgets/embed/client.js" id="ShopifyEmbedScript"><\/script>');
</script>
<noscript><a href="https://kaibots.myshopify.com/cart/1346947841:1" target="_blank">Buy Manabot</a></noscript>
<!-- Closing main-container -->
</div>
<?php include 'footer.php'; ?>
<!-- closing background-container-->
</div>