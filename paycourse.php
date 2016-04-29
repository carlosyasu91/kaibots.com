<?php 
//Include the top bar, css styles and favicon
include 'header.php';
session_start();
?>
<body>
<div class="background-container" >
<div class="container main-container">


<div style="text-align:center;">
</div>
<div style="float:left;display:inline-block">
	<div style="float:left">
</div>
</div>
<h3 style="text-align:center"><?php echo coursetitle;?></h3>
<div style="width:700px;margin:0 auto;padding:20px;">
<h4 style="line-height:25px;text-align:justify">
El curso del Manabot se dar&aacute; en la UDEM. En el curso aprender&aacute;s las bases de c&oacute;mo funciona un Manabot.
Lo que incluye aprender a programar en Arduino, aprender acerca de motores, servomotores, giroscopios y Bluetooth. Se formar&aacute;n equipos de tres personas durante el curso y se le dar&aacute; un Manabot a cada equipo.
<br><br>
Horario: 10:00 - 14:00<br>
Fecha: 25 de abril de 2015<br/>
Lugar: UDEM - Laboratorio de Procesos Mec&aacute;nicos
<br><br>

<div style="text-align:center">Para inscribirte solamente haz clic en comprar ahora y realiza el pago.</div>

</h4>
</div>
<div style="text-align:center;margin:0 auto;width:300px">
<img src="images/manabotlogo.gif" style="padding:10px">
<div style="text-align:center;margin:0 auto" data-button_background_color="359435" data-buy_button_text="<?php echo buybuttontitle;?>" data-display_size="regular" data-embed_type="product" data-first_variant_id="1163830761" data-has_image="false" data-product_handle="curso-manabot" data-product_name="Curso Manabot" data-redirect_to="checkout" data-shop="kaibots.myshopify.com"></div>
</div>
<script type="text/javascript">
document.getElementById('ShopifyEmbedScript') || document.write('<script type="text/javascript" src="https://widgets.shopifyapps.com/assets/widgets/embed/client.js" id="ShopifyEmbedScript"><\/script>');
</script>
<noscript><a href="https://kaibots.myshopify.com/cart/1163830761:1" target="_blank"><?php echo buybuttontitle?></a></noscript>
<!-- Closing main-container -->
</div>
<!-- closing background-container-->
</div>
<?php include 'footer.php'; ?>
</body>