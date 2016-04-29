<?php

try{
$pdo = new PDO('mysql:host=localhost;dbname=misretos_kaibotsdb', 'misretos', 'Mof54785478');

} catch (PDOExceptoin $e){
	echo 'Connection failed' . $e->getMessage();
	exit('Database error.');
}
?>