<?
$db = new PDO("mysql:host=localhost; dbname=my_magazine; charset=utf8", "root", "", 
[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

// $db = new PDO("mysql:host=localhost; dbname=donevgrd_shop; charset=utf8", "donevgrd_shop", "Chipolino86", 
// [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);