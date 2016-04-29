<?php include 'header.php';
?>
<div class="background-container" >
<div class="container main-container">
<h2 class="welcome" style="text-align:center"><?php echo welcome; ?></h2>
<h3 style="text-align:center"><?php echo meetmessage;?></h3><br>
<h3 style="text-align:center"><?php echo kitincludes;?></h3><br>
<div class="parts-div">
<table class="parts-table">
<tr>
	
	<td class="parts-image">
		<img src="images/arduino-nano.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo arduinonano;?>
	</td>
		<td class="parts-image">
		<img src="images/hm-10.png" width="150">
	</td class="parts-desc">
	<td>
		<?php echo hm10;?>
	</td>
</tr>
<tr>
	<td class="parts-image">
		<img src="images/gy-521.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo accelerometer;?>
	</td>
		<td class="parts-image">
		<img src="images/motor.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo gearmotors;?>
	</td>
</tr>
<tr>
	<td class="parts-image">
		<img src="images/servo.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo servomotor;?>
	</td>
		<td class="parts-image">
		<img src="images/arduino-nano.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo mainboard;?>
	</td>
</tr>
<tr>
	<td class="parts-image">
		<img src="images/arduino-nano.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo bodypart;?>
	</td>
		<td class="parts-image">
		<img src="images/arduino-nano.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo lowerpart;?>
	</td>
</tr>
<tr>
	<td class="parts-image">
		<img src="images/arduino-nano.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo upperpart;?>
	</td>
		<td class="parts-image">
		<img src="images/arduino-nano.gif" height="150">
	</td>
	<td class="parts-desc">
		<?php echo lowerpart;?>
	</td>
</tr>
</table>
</div>
<div class="buy-button-div">
  <button type="button" class="btn btn-default btn-lg buy-button" ><?php echo buynow;?></button>
</div>
<!-- Closing main-container -->
</div>
<!-- closing background-container-->
</div>
<?php include 'footer.php'; ?>