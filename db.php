<?php

try{
	$con = new PDO('mysql:host=localhost;dbname=login','root','toor');
} catch(PDOException $e) {
	die('Connection failed: ' . $e->getMessage());
}