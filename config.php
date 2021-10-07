<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/slug_mvc/");
	$config['dbname'] = 'slug_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://seusite.com.br/");
	$config['dbname'] = 'slug_mvc';
	$config['host'] = 'xxx.xxx.x.xxx';
	$config['dbuser'] = 'xxxxxxxx';
	$config['dbpass'] = 'xxxxxxxxxx';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}

