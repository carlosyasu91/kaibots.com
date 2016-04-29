<?php 
session_start();
function setLanguage(){
	if(isset($_GET["language"])){
	$_SESSION["language"] = $_GET["language"];
	}
	if(isset($_SESSION["language"]))
	{
		require_once('lang/'.$_SESSION["language"].'.php');
	}
	else{
		require_once('lang/en_US.php');
	}
}
setLanguage();
?>