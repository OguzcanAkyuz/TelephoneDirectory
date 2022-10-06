
<?php 
include "database.php";

header('location:homepage.php');

$Name = $_POST['Name'] ;
$Surname =  $_POST['Surname'];
$PhoneNumber = $_POST['PhoneNumber'];
$HomeNumber = $_POST['HomeNumber'];

 	$dc = $db -> prepare("INSERT INTO persons(Name,Surname,PhoneNumber,HomeNumber) VALUES (?,?,?,?)");
 	$dc -> execute(array($Name,$Surname,$PhoneNumber,$HomeNumber));
 	echo "Succes";
 	header("refresh:1;url=rehber/homepage.php");
?>


