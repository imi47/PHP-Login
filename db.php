<?php

try{
	$con = new PDO('mysql:host=localhost;dbname=login','root','');
} catch(PDOException $e) {
	die('Connection failed: ' . $e->getMessage());
}
