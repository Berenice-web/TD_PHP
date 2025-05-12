<?php
 $hostname= "localhost";
 $dbname = "tp1";
 $dbuser= "root";
 $dbpassword="";
 try{
	$connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch (\Throwable $th){
    die("base de donnee indisponible");
}
?>