<?php 
$dsn= 'mysql:dbname=telephone_directory;host';
$user='root';
$password='';

try{

	$db= new PDO($dsn, $user, $password);
	

}catch (PDOException $e)
{
	echo 'connection error'. $e->getMessage();
}


?>