<?php

@session_start();
ob_start();
try{
	$db =new PDO("mysql:host=localhost;dbname=offers;charset:utf8;","root","");
	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

}
catch(PDOException $e){
	print $e->getMessage();
}
?>