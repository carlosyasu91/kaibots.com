<?php
session_start();

//if canonical URL is specified, include canonical link element

require('functions.php');
?>
<html>
 <head>
  <title><?php echo title;?></title>
  <meta name="description" content="<?php echo $pageDescription;?>">
  <meta name="keywords" content="<?php echo $pageKeywords; ?>">
  <?php

  //if canonical URL is specified, include canonical link element 
  if($pageCanonical){
    echo '<link rel="canonical" href="'. $pageCanonical .'">';
  }
  //if meta robots content is specified, include robots meta tag
  if($pageRobots){
    echo '<meta name="robots" content="'. $pageRobots .'">';
  }

  ?>
 	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 	<meta property="og:title" content="Kaibots Homepage">
 	<meta property="og:image" content="http://kaibots.com/images/appicon.gif"/>
 	<meta property="og:url" content="http://kaibots.com/">


<!-- Styles-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="all" href="style/jquery.lightbox-0.5.css">
<link rel="stylesheet" href="style/style.css">

<link rel="shortcut icon" type="image/x-icon" href="http://kaibots.com/favicon.ico"/>
<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
 </head>
 <body class="page-wrap">
<nav class="navbar navbar-default nav-properties">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
	<a href="/index.php"><img src="http://kaibots.com/images/kaibotlogonobackground.gif" alt="Mountain View" class="center kaibotslogo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse main-nav" id="bs-example-navbar-collapse-1" style="margin:0px auto">
      <ul class="main-nav">
        <li><a href="manabot_details.php" style="color:black"><?php echo manabot;?></a></li>
        <li><a href="guides.php" style="color:black"><?php echo examples;?></a></li>
        <li><a href="about.php" style="color:black"><?php echo about;?></a></li>
        <li><a href="gallery.php" style="color:black"><?php echo gallery;?></a></li>
       
      </ul>
     <div class="flagsdiv" style="margin-top:12px;margin-right:0px">
</div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
