<?php
try{
	if(strlen($lang)!=5){throw new Exception();}
	$dict=json_decode(file_get_contents("lang/".$lang.".json"),true);
}catch(Exception $e){
	$dict=json_decode(file_get_contents("lang/es_LA.json"),true);
}
?>