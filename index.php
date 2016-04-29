<?php 
session_start();

//Define variables for the SEO markup
$pageDescription = 'Check out the new Manabot! Learn to code in arduino and connect a robot with your smartphone!';
$pageKeywords = 'kaibots,kaibot,manabot,arduino,learn,robot';
$pageCanonical = 'http://www.kaibots.com/';

//Include the top bar, css styles and favicon
include('header.php');
?>
<div class="background-container" >
	<div class="container main-container">
	<h2 class="welcome" style="text-align:center"><?php echo welcome; ?></h2>

	<div class="manabot-logo">
		<img src="images/manabotlogo.gif">
	</div>
	<div style="float:left;display:inline-block">
		<div style="float:left">
	<img src="images/manabot.gif" height="440" style="display:inline"/>
	</div>
	</div>
	<h3 style="text-align:left;padding-left:400px"><?php echo whymanabot;?></h3>
	<div class="kitdescription"  style="width:400px">
	<h4>
	<?php echo whymanabotdesc;?>
	</h4>
		<p class="details-link"><a href="manabot-details" ><?php echo details;?></a></p>
	</div>
	<div class="buy-button-div">
		<div style="text-align:center;margin:0 auto" 
		data-background_color="ffffff" 
		data-button_background_color="7db461" 
		data-button_text_color="ffffff" 
		data-buy_button_text="<?php echo buynow;?>" 
		data-display_size="compact" 
		data-embed_type="product" 
		data-first_variant_id="1346947841" 
		data-has_image="false" 
		data-product_handle="manabot" 
		data-product_name="Manabot" 
		data-redirect_to="checkout" 
		data-shop="kaibots.myshopify.com">
		</div>
	<script type="text/javascript">
	document.getElementById('ShopifyEmbedScript') || document.write('<script type="text/javascript" src="https://widgets.shopifyapps.com/assets/widgets/embed/client.js" id="ShopifyEmbedScript"><\/script>');
	</script>
		<!--<button type="button" class="btn btn-default btn-lg buy-button" ><?php //echo buynow;?></button>-->
	</div>
	<div style="height:50px"></div>
	<div class="applinks">
		<p><?php echo appmessage;?></p>
		<a target="_blank"href="https://play.google.com/store/apps/details?id=com.kaibotsgen.android.BluetoothChat">
		  <img alt="Get it on Google Play"
		       src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" />
		</a>
	</div>
<!-- Closing main-container -->
</div>
<!-- closing background-container-->

<?php include 'footer.php'; ?>
</div>